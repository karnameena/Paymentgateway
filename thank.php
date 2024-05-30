<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Purchase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#CBF2E3 ;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 1.2em;
            margin: 10px 0;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Your Purchase!</h1>
        <p>You have successfully purchased our bot.</p>
        <p>Please send a screenshot of the successful payment and your Telegram user ID to the 
            following  Telegram ID 👇 </p>
           
        <p><a href="https://t.me/@Karnayujoi" target="_blank">@Karnayujoi</a></p>
        <p>!..After that we will provide secret code to use Bot!</p>
    </div>
</body>
</html>

<?php
    file_put_contents("log.txt", "transactionId: " . $_POST['transactionId'] . " telegram_User_Id: " . $_POST['telegramUserId'] . "\n", FILE_APPEND);

   
exit();