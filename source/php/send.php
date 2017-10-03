<?php

include 'debuglog.php';

if(isset($_POST['mailto'])){


		$name = $_POST['name'];

		$country = $_POST['country'];

		$email = $_POST['email'];

		$phone = $_POST['phone'];

		$message = $_POST['message'];

		//converting data to send it by email
		$text = $name."/".$country."/".$email."/".$phone."/".$message;

	mail("dancinoman@gmail.com", "Hugo WebDesigner", $text);
}
