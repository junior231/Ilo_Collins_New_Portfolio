<?php 

// $name = $_POST['name'];
// $lname = $_POST['lname'];
// $messagesub = $_POST['messagesub'];
// $email = $_POST['email'];
// $message = $_POST['message'];


// $formcontent="From: $name \n Message: $message";
// $recipient = "ilocollins231@gmail.com";
// $subject = "Portfolio Contact Form";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!";

if(isset($_POST['submit'])){
    $name = ($_POST['name']);
    $name = ($_POST['lname']);
    $subject = ($_POST['messagesub']);
    $email = ($_POST['email']);
    $msg = ($_POST['message']);

    $mailTo = "jnreala@yahoo.com";

    $headers = "From: ".$mailFrom;
    $text = "You have Received an e-mail from ".$name.".\n\n".$msg;

    mail($mailTo, $subject, $text, $headers);
    header("Location: index.php?mailsend");


?>