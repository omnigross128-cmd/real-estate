<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Please login first");
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['change_btn'])) {

    $new = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    if ($new !== $confirm) {
        die("Passwords do not match");
    }

    $hashed = password_hash($new, PASSWORD_DEFAULT);

    $sql = "UPDATE register SET password=? WHERE id=?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("SQL ERROR: " . $conn->error);
    }

    $stmt->bind_param("si", $hashed, $user_id);

    if ($stmt->execute()) {
        echo "Password updated successfully!";
    } else {
        echo "Error updating password: " . $stmt->error;
    }
}
?>

<script>
const form = document.getElementById("changePassForm");

form.addEventListener("submit", function(e){
 e.preventDefault();

 const msg = document.getElementById("passMsg");

 fetch("change-password.php",{
   method:"POST",
   body:new FormData(form)
 })
 .then(res => res.text())
 .then(data => {
   msg.innerHTML = data;   // ⭐ show message
   msg.style.display="block";
 });
});
</script>