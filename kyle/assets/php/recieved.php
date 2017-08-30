<?php
//Input Variables
$name = $_POST[name];
$company = $_POST[company];
$phone = $_POST[phone];
$email = $_POST[email];
$service = $_POST[service];
$budget = $_POST[budget];
$comments = $_POST[comments];

//Write the Email
$to = 'kylejohnson2612@gmail.com';
$subject = 'Requst Info';
$message = "Thank you $name, for requesting information about $service from Kyle Design & Development. A representative will contact you shortly. This form was sent by HTTP request.";

//Send the Email
mail($to, $subject, $message, 'FROM:'.$email);

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="../css/styles.css" >
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<title>Sent</title>
</head>

<body id="requestPage">
<div class="container fade-in">
	<div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 demobox">
		  <div class="row">
		  	<div class="col-sm-12">
                <h2>Thank You!</h2>
                <p><?php  echo $message; ?></p>
                <p>Your contact information is:</p>
                <p><?php echo $phone; ?></p>
                <p><?php echo $email; ?></p>
                <p><a href="../../../kyle.html">Send another form!</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
