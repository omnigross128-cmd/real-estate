<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>

    <!-- Auto redirect after 10 seconds -->
    <meta http-equiv="refresh" content="10;url=index.php">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 30px 15px;
            background: #f7f7f7;
        }

        .box {
            background: #fff;
            padding: 30px;
            width: 100%;
            max-width: 450px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            font-size: 22px;
            line-height: 1.4;
        }

        p {
            font-size: 15px;
            line-height: 1.6;
        }

        .loader {
            margin: 20px auto;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Extra Mobile Optimization */
        @media(max-width: 480px) {
            h2 {
                font-size: 20px;
            }
            .box {
                padding: 20px;
            }
            p {
                font-size: 14px;
            }
            .loader {
                width: 45px;
                height: 45px;
            }
        }
    </style>
</head>
<body>

<div class="box">
    
    <h2>Thank you for listing your property! 🎉</h2>
    <p>If it’s not visible within 24 hours, call our helpline: <strong>+91 92846 01662</strong></p>

    <div class="loader"></div>

    <p>You will be redirected to the Home Page in <strong>10 seconds</strong>.</p>
    <p>If not redirected, <a href="index.php">Click Here</a>.</p>
</div>

</body>
</html>

