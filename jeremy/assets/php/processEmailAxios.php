<?php
$error = array();
$data = array();
	// if any of these variables don't exist, add an error to $errors array
	if (empty($_POST['fullname']))
		$error['fullname'] = 'Full Name is required.';
	if (empty($_POST['email']))
		$error['email'] = 'Email is required.';
	// if there are any errors in errors array, return false
	if ( ! empty($error)) {
		// if there are items in errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $error;
	} else {
		// if there are no errors send email and success message
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $airline = $_POST['airline'];
        $destination = $_POST['destination'];
        
        //Write the Email
        $to = 'jeremyashby25@gmail.com';
        $subject = 'Travel Request email';
        $message = "$fullname would like a flight on $airline to $destination. You should contact them at $email and $address";
        
        //Send the Email
        mail($to, $subject, $messageAdmin, 'FROM:'.$email);
        mail($email, $subject, $messageUser, 'FROM:'.$to);
        
		// show a message of success
		$data['success'] = true;
		$data['messageUser'] = 'Success!';
	}
	// return all data to AJAX call
    echo json_encode($data);
    
    ?>