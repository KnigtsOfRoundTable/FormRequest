<?php 
  $name = $_POST['name'];
  $email = $_POST['from'];
  $message = $_POST['body'];

  $to = "hiro@mrhiro.com"; //recipient 

  $subject = "RIA Emails"; //subject 
  $header = "From: " . $name . " <" . $email . ">\r\n";


    if (mail($to, $subject, $message, $header)){
       echo "<h1>Thank You, your email has been sent!</h1>";  
  } else {
      echo "<h1>Error: something went wrong.</h1>";
  }

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging whena phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>RIA Forms</title>
<link href="erick/styles/main.css" type="text/css" rel="stylesheet">
<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:300,700" rel="stylesheet"> 
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta http-equiv="refresh" content="5; URL=../../erick.html">
</head>


</html>