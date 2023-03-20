<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_from='https://ashishkum1999.github.io/Web-Projects/';

$email_subject = 'New From Submission';

$email_body ="User Name : $name. \n". 
             "User Email : $visitor_email. \n".
              "User Subject : $subject. \n".
               "User Massage : $massage. \n";

$to = 'ashish.48official@gmail.com';
$headers = "From: $email_from \r\n"
$headers . = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");


?>