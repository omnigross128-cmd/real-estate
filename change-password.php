<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];  // make sure you stored user id in session

if (isset($_POST['change_btn'])) {

    $new = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    if ($new !== $confirm) {
        die("Passwords do not match");
    }

    // Hash password
    $hashed = password_hash($new, PASSWORD_DEFAULT);

    // CORRECT TABLE NAME → register
    $sql = "UPDATE register SET password=? WHERE id=?";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("SQL ERROR: " . $conn->error);   // shows exact error if any
    }

    $stmt->bind_param("si", $hashed, $user_id);

    if ($stmt->execute()) {
        echo "Password updated successfully!";
    } else {
        echo "Error updating password: " . $stmt->error;
    }
}
?>
