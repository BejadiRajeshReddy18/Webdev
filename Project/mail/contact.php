<?php
$name = $_GET['name'];
$email = $_GET['email'];
$number = $_GET['contact'];
$appointment_date = $_GET['appointment_date'];
$subject = $_GET['subject'];
$message = $_GET['message'];


$email_from = 'vankipuramchirangeevi@gmail.com';
$email_subject = 'new enquiry submission';
$email_body = " user name: $name.\n".
                " user email: $visitor_email.\n".
                " user number: $visitor_phone_number.\n".
                " user appointment_date: $appointment_date.\n".
                " user subject: $subject.\n";
                " user message: $message.\n";

$to = 'stylichiru@.gmali.com';

$headers = "from: $email_from \r\n";
$headers .= "reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: thankyou.html");
?>