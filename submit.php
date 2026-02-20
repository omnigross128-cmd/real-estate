<?php
// -----------------------------
// 1. CHECK IF FORM WAS SUBMITTED
// -----------------------------
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Example: Fetch form inputs (add yours here)
    $name   = $_POST['name'] ?? '';
    $email  = $_POST['email'] ?? '';
    $phone  = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    // -------------------------------------
    // 2. SAVE TO DATABASE (OPTIONAL)
    // -------------------------------------
    /*
    include 'db_connect.php';
    $sql = "INSERT INTO form_data (name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";
    mysqli_query($conn, $sql);
    */

    // -------------------------------------
    // 3. SEND MAIL (OPTIONAL)
    // -------------------------------------
    /*
    mail($email, "Form Submitted", "Thank you for contacting us!");
    */

} else {

    // IF USER OPENS submit.php DIRECTLY
    header("Location: index.php");
    exit;
}
?>

<!-- ----------------------------------------- -->
<!-- 4. THANK YOU PAGE + AUTO REDIRECT         -->
<!-- ----------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>

    <!-- Auto redirect in 10 seconds -->
    <meta http-equiv="refresh" content="10; url=index.php">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding-top: 150px;
        }
        .box {
            background: white;
            width: 450px;
            margin: auto;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        h2 {
            color: #28a745;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #444;
        }
    </style>
</head>

<body>
<div class="box">
    <h2>Thank You!</h2>
    <p>Your form has been submitted successfully.</p>
    <p>You will be redirected to the Home Page in <b>10 seconds</b>...</p>
</div>
</body>
</html>
