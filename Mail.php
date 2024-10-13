<?php

$to = "rmarathe013@gmail.com";
$subject = "Wish";
$info = "Happy Holi !";
$header = "suyashmarathe22@gmail.com";

if (mail($to, $subject, $info, $header)) 
{
    echo "Email sent successfully.";
} 
else 
{
    echo "Failed to send email.";
}
