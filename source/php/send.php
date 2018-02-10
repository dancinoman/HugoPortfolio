<?php

include 'debuglog.php';
$fd= 2;
console.log($fd);
$text = "";

$name = $_POST['name'];

$country = $_POST['country'];

$email = $_POST['email'];

$message = $_POST['message'];


//converting data to send it by email
$text .= "name: ". $name ."\n";
$text .= "country: ". $country ."\n";
$text .= "email:". $email ."\n";
$text .= $message ."\n";

mail("dancinoman@gmail.com", "Request from Hugo Web-Designer", $text);
