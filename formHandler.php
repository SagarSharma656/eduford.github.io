<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$email_from = 'aktu.com.in'

$email_subject = 'New Form Submission'


$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'sagar.237052@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>