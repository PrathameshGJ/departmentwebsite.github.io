<?php
$name = $post['name'];
$visitor_email = $post['email'];
$subject = $post['subject'];
$message = $post['message'];

$email_from = 'sgbitece.tech';
$email_subject = 'new form submission';
$email_body = "user name:$name.\n" .
    "user email:$visitor_email.\n" .
    "subject:$subject.\n" .
    "user message: $message .\n";

$to = 'eceofficial2k20@gmail.com';
$header = "from: $email_from \r\n";

$header = "reply to: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $header);

























?>