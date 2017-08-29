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
$message = "Thank you $name for requesting information about $service from Kyle Design & Development. A representative will contact you shortly.";

//Send the Email
mail($to, $subject, $message, 'FROM:'.$email);

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="styles.css" >

<title>Sent Email</title>
</head>

<body>
<?php  echo $message; ?>
<p>Your contact information is:</p>
<?php echo $phone; ?><br />
<?php echo $email; ?><br />
</body>
</html>
