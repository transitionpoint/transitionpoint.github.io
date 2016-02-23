<?php
$to = "jayhafling@gmail.com"; //Change this email adress.

$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = "Message from your blog";
$message = $_POST['message'];

mail($to,$subject,$message,"From: ".$email."");

echo 'Thank you '.$name.', your message has been sent.'; 
?>
