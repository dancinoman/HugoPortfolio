<?php

include 'debuglog.php';

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

mail("hugo@hugo-webdesigner.com", "From a request", $text);
