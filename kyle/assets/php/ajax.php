<?php

$errors = array();
$data = array();

	// if any of these variables don't exist, add an error to $errors array
	if (empty($_POST['name']))
		$errors['name'] = 'Name is required.';
	if (empty($_POST['email']))
		$errors['email'] = 'Email is required.';

	// if there are any errors in errors array, return false
	if ( ! empty($errors)) {
		// if there are items in errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
		// if there are no errors send email and success message
		$name = $_POST['name'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $budget = $_POST['budget'];
        $comments = $_POST['comments'];
        
        //Write the Email
        $to = 'kylejohnson2612@gmail.com';
        $subject = 'Requst Info';
        $messageAdmin = "You have a request from $name, who is requesting information about $service from Kyle Design & Development. Here is thier email: $email, budget: $budget, and message: $comments";
        $messageUser = "Thank you $name, for requesting information about $service from Kyle Design & Development. A representative will contact you shortly. This form was sent by a Jquery AJAX request.";
        
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