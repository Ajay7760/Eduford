<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$visitor_from = 'ajayjtiwari2000@gmail.com';

$email_subject ='new from submission';

$email_body = " user Name: $name.\n".
                " user Email: $visitor_email.\n".  
                " user Email: $subject.\n".
                " user Message: $message.\n".
      
   $to = ' atiwari2131@gmail.com';
   
   $headers = "From: $email_from \r\n";

   $headers  = "Reply-to : $visitor_email \r\n";
   
  mail($to, $email_subject,$email_body, $headers);      
  
  header("Location: contact.thmk");
?>