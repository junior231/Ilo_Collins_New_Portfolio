<?php 

$name = $_POST['name'];
$lname = $_POST['lname'];
$messagesub = $_POST['messagesub'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ilocollins231@gmail.com";
$subject = "Portfolio Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>