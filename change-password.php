<?php
include 'config.php';

$message = "";
$message_type = "danger";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['change_btn'])) {
    $email = trim($_POST['email'] ?? '');
    $new = $_POST['new_password'] ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    if ($email === '' || $new === '' || $confirm === '') {
        $message = "Please fill all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email.";
    } elseif ($new !== $confirm) {
        $message = "Passwords do not match.";
    } elseif (strlen($new) < 6) {
        $message = "Password must be at least 6 characters.";
    } else {
        $hashed = password_hash($new, PASSWORD_DEFAULT);
        $sql = "UPDATE register SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            $message = "SQL ERROR: " . $conn->error;
        } else {
            $stmt->bind_param("ss", $hashed, $email);

            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    $message_type = "success";
                    $message = "Password updated successfully. You can login now.";
                } else {
                    $message = "No account found with this email.";
                }
            } else {
                $message = "Error updating password: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6f8;
            margin: 0;
            padding: 0;
        }
        .wrap {
            max-width: 420px;
            margin: 60px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            padding: 24px;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 24px;
        }
        label {
            display: block;
            margin: 10px 0 6px;
            font-size: 14px;
        }
        input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #d8dbe0;
            border-radius: 6px;
        }
        button {
            margin-top: 14px;
            width: 100%;
            padding: 11px 12px;
            border: 0;
            border-radius: 6px;
            background: #0d6efd;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
        .msg {
            margin-bottom: 14px;
            padding: 10px;
            border-radius: 6px;
            font-size: 14px;
        }
        .msg.success {
            background: #e8f7ed;
            color: #176f39;
            border: 1px solid #bde7cb;
        }
        .msg.danger {
            background: #ffecec;
            color: #9c1c1c;
            border: 1px solid #ffc8c8;
        }
        .login-link {
            display: inline-block;
            margin-top: 14px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <h2>Reset Password</h2>

        <?php if ($message !== ""): ?>
            <div class="msg <?php echo htmlspecialchars($message_type); ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="change-password.php">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>New Password</label>
            <input type="password" name="new_password" required>

            <label>Confirm New Password</label>
            <input type="password" name="confirm_password" required>

            <button type="submit" name="change_btn">Change Password</button>
        </form>

        <a class="login-link" href="login.php">Back to Login</a>
    </div>
</body>
</html>
