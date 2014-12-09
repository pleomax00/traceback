<?php
 
$email_to = "shamail@traceback.in";
$email_subject = "[traceback.in] Contact Form Posted";
$email_from = "noreply@traceback.in";

$first_name =  isset ($_POST['contactName']) ? $_POST['contactName'] : "Unspecified";
$email =  isset ($_POST['contactEmail']) ? $_POST['contactEmail'] : "Unspecified";
$subject =  isset ($_POST['contactSubject']) ? $_POST['contactSubject'] : "Unspecified";
$message =  isset ($_POST['contactMessage']) ? $_POST['contactMessage'] : "Unspecified";

$email_message = "Form details below.\n\n";
$email_message .= "First Name - ".$first_name."\n";
$email_message .= "Email - ".$email."\n";
$email_message .= "Phone - ".$subject."\n\n";
$email_message .= $message."\n";

$headers = 'From: '.$email_from."\r\n".  'Reply-To: '.$email_from."\r\n" .  'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

echo "OK";
