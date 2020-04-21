<?php

// 建立簡短的變數名稱
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

// 設定一些靜態資訊
$toaddress = "feedback@example.com";
$subject = "Feedback from web site";

$mailcontent = "Customer name: ".str_replace("\r\n", "", $name)."\n".
               "Customer email: ".str_replace("\r\n", "", $email)."\n".
               "Customer comments:\n".str_replace("\r\n", "", $feedback)."\n";

$fromaddress = "From: webserver@example.com";

// 呼叫mail()函式來寄送郵件
mail($toaddress, $subject, $mailcontent, $fromaddress);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Feedback Submitted</title>
    </head>
    <body>
        <h1>Feedback submitted</h1>
        <p>Your feedback (shown below) has been sent.</p>
        <p><?php echo n12br(htmlspecialchars($feedback)); ?></p>
    </body>
</html>
