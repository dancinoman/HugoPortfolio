<?php

include 'debuglog.php';

$text = "";

if(isset($_POST['mailto'])){

		$name = $_POST['name'];

		$country = $_POST['country'];

		$email = $_POST['email'];

		$phone = $_POST['phone'];

		$message = $_POST['message'];


		if(mail("hugo@hugo-webdesigner.com", "From a request", $text)){
			return;
		}

		//converting data to send it by email
		$text .= $name ."\n";
		$text .= $country ."\n";
		$text .= $email ."\n";
		$text .= $phone ."\n";
		$text .= $message ."\n";


}
