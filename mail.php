<?php
$to = 'mslewandowski@interia.pl';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Nowy e - meil od' . $name .' ('. $email. ')';
$message = $_POST['message'];
$headers = 'From:' . $name .' ('. $email. ')';
$headers .= "Content-Type: text/html; charset=utf.8\r\n";



mail($to, $subject, $message, $headers);




?>