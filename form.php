<?php
 
$email_to = "shamail@traceback.in";
$email_subject = "[traceback.in] Contact Form Posted";

$first_name =  isset ($_POST['name']) ? $_POST['name'] : "Unspecified";
$email_from =  isset ($_POST['email']) ? $_POST['email'] : "Unspecified";
$subject =  isset ($_POST['subject']) ? $_POST['subject'] : "Unspecified";
$message =  isset ($_POST['message']) ? $_POST['message'] : "Unspecified";

$email_message = "Form details below.\n\n";
$email_message .= "First Name: ".$first_name."\n";
$email_message .= "Email: ".$email_from."\n";
$email_message .= "Subject: ".$subject."\n";
$message .= "Comments: ".$message."\n";

$headers = 'From: '.$email_from."\r\n".  'Reply-To: '.$email_from."\r\n" .  'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

echo "OK";
