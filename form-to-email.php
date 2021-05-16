<?php
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

// validate
if (empty($name)|| empty($visitor_email)){
    echo "Name and Email are mendatory";
    exit;
}
$email_from = "sales@dconnect.in";
$email_subject = "New form submission";
$email_body = "You have received a new message for the user $name.\n".
    "email address: $visitor_email\n".
    "Here is the message: \n $message"

$to = "sales@dconnect.in"
$headers = "From: $email_from \r\n"

mail($to, $email_subject, $email_body, $headers)