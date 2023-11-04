<?php
 $name= $_POST['name'];
 $visitor_email= $_POST['email'];
 $subject= $_POST['subject'];
 $message= $_POST['message'];

 $email_from = 'info@nihadbens.github.io';
 $email_subject = 'Nouvelle soumission de formulaire';
 $email_body = "utilisateur name : $name.\n".
               "utilisateur Email : $visitor_email.\n".
               "subject : $subject.\n".
               "message : $message.\n";
$to = 'emcm.melihi@gmail.com';
$headers = "Form: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location : contact.html");
?>