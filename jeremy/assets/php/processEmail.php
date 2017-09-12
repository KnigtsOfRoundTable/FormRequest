<?php
//Load the variables from the form
$fullname = $_POST[fullname];
$email = $_POST[email];
$address = $_POST[address];
$airline = $_POST[airline];
$destination = $_POST[destination];

//Build the email
$to = 'jeremyashby25@gmail.com';
$subject = 'Travel Request email';
$message = "$fullname would like a flight on $airline to $destination. You should contact them at $email and $address";

//Send email
mail($to, $subject, $message, 'FROM:'.$email);
	


?>