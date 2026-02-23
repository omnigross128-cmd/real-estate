<?php
session_start();
include('config.php');

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $newPassword = $_POST['new_password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($email === '' || $newPassword === '' || $confirmPassword === '') {
        $error = 'All fields are required.';
    } elseif ($newPassword !== $confirmPassword) {
        $error = 'Passwords do not match.';
    } else {
        $stmt = $conn->prepare('SELECT id FROM register WHERE email = ? LIMIT 1');
        if ($stmt) {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows === 1) {
                $user = $result->fetch_assoc();
                $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);

                $update = $conn->prepare('UPDATE register SET password = ? WHERE id = ?');
                if ($update) {
                    $update->bind_param('si', $passwordHash, $user['id']);
                    if ($update->execute()) {
                        $success = 'Password reset successful. You can now sign in.';
                    } else {
                        $error = 'Could not reset password. Please try again.';
                    }
                    $update->close();
                } else {
                    $error = 'Could not reset password. Please try again.';
                }
            } else {
                $error = 'No account found with that email.';
            }
            $stmt->close();
        } else {
            $error = 'Server error. Please try again.';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<div class="body-wrapper">
    <div class="ltn__login-area pb-110 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <h3 class="text-center mb-30">Reset Password</h3>
                        <form class="ltn__form-box contact-form-box" method="post" action="forgot-password.php">
                            <?php if ($error !== ''): ?>
                                <div style="color:#dc3545; margin-bottom:12px;"><?php echo htmlspecialchars($error); ?></div>
                            <?php endif; ?>
                            <?php if ($success !== ''): ?>
                                <div style="color:#198754; margin-bottom:12px;"><?php echo htmlspecialchars($success); ?></div>
                            <?php endif; ?>
                            <input type="email" name="email" placeholder="Registered Email*" required>
                            <input type="password" name="new_password" placeholder="New Password*" required>
                            <input type="password" name="confirm_password" placeholder="Confirm Password*" required>
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit">RESET PASSWORD</button>
                            </div>
                            <div class="go-to-btn mt-20">
                                <a href="login.php"><small>BACK TO LOGIN</small></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
