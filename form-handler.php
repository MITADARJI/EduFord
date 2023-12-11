<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'info.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visiter_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'darjimeet1372002@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visiter_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>