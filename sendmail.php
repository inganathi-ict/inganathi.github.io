<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

$to = "your@email.com";   // your email address
$subject = "New Website Enquiry";

$body = "You have received a new enquiry from your website.\n\n";
$body .= "Name: ".$name."\n";
$body .= "Email: ".$email."\n";
$body .= "Phone: ".$phone."\n\n";
$body .= "Message:\n".$message;

$headers = "From: ".$email;

if(mail($to,$subject,$body,$headers)){
    echo "Message sent successfully!";
}else{
    echo "Message failed to send.";
}

}

?>
