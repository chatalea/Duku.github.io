<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@DUKUmargetingstrategy.com';

$email_subject = 'New Form Submission';

$emai_body = "User Name: $name.\n".
              "User email: $Visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'serviceprojectmanagement940@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$emai_body,$headers);

header("Location: contact.html");
?>