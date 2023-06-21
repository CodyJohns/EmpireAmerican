<?php 

$sender = $_POST['sender'];
$message = $_POST['message'];

$recipient = "cjohns365@gmail.com";
$subject = "User submitted form from website";

date_default_timezone_set('America/Denver');

$time = date("Y-m-d H:i:s");

$body = "<p><b>" . $sender . "</b> said:</p><p>" . $message . "</p><p>" . $time . "</p>";

$recip_body = "<div style='max-width:800px;margin:0 auto;font-family: Arial, Helvetica, sans-serif;'><div style='width:100%;padding:20px;'><center><img src='https://empire-american.com/img/logo_small.9c31b96f.png' height='60px' /></center></div><div style='max-width:500px;padding-bottom:60px;margin:0 auto;'><p>" . $body . "</p></div><div style='background: #f9f9f9;padding:10px 40px;font-size:12px;color:#333;'><p>This email was sent due to account action on your part. We will not send you these types of emails unless you have requested it by interacting with our website.</p></div><div style='background: #d90429;color:#fefefe;padding:20px 40px;'><p>Empire-American &copy; 2022. All rights reserved. All images and logos belong to Empire-American.</p><p>Phone: (972) 201-7993&nbsp;&nbsp;&nbsp;&nbsp;Email: support@empire-american.com</p></div></div>";

$subject2 = "Empire-American contact form submitted";
$message2 = "<p>Thank you for your interest in our company!</p><p>We will be in contact with you shortly.<p/><p>Please allow up to 1 business day for a response.</p>";

$sender_body = "<div style='max-width:800px;margin:0 auto;font-family: Arial, Helvetica, sans-serif;'><div style='width:100%;padding:20px;'><center><img src='https://empire-american.com/img/logo_small.9c31b96f.png' height='60px' /></center></div><div style='max-width:500px;padding-bottom:60px;margin:0 auto;'><p>" . $message2 . "</p></div><div style='background: #f9f9f9;padding:10px 40px;font-size:12px;color:#333;'><p>This email was sent due to account action on your part. We will not send you these types of emails unless you have requested it by interacting with our website.</p></div><div style='background: #d90429;color:#fefefe;padding:20px 40px;'><p>Empire-American &copy; 2022. All rights reserved. All images and logos belong to Empire-American.</p><p>Phone: (972) 201-7993&nbsp;&nbsp;&nbsp;&nbsp;Email: support@empire-american.com</p></div></div>";

$output = shell_exec('echo "' . $recip_body . '" | mail -a "From: Empire American <noreply@empire-american.com>" -a "Content-type: text/html" -s "' . $subject . '" ' . $recipient);

$output2 = shell_exec('echo "' . $sender_body . '" | mail -a "From: Empire American <noreply@empire-american.com>" -a "Content-type: text/html" -s "' . $subject2 . '" ' . $sender);

echo json_encode(['data' => 'Contact request sent. Please allow up to 1 business day for a response. We appreciate doing business with you!']);

?>