<?php
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $message = $_REQUEST['contactMessage'];
  $contactDropdown = $_REQUEST['contactDropdown'];

  //$to = "hiro@mrhiro.com"; //recipient 
$to = "NBA_EAP@hotmail.com";

  $subject = "RIA Emails"; //subject 
  $header = "From: ". $name . " <" . $from . ">\r\n";
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
<meta http-equiv="refresh" content="10; URL=erick.html">
</head>

<body>

<div class="headerWrapper clearfix">
	<h1>RIA Forms</h1>
	<h2>DGM 3790</h2>
	
	<div class="nav clearfix">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="ben.html">Ben</a></li>
			<li class="active"><a href="erick.html">Erick</a></li>
			<li><a href="jeremy.html">Jeremy</a></li>
			<li><a href="kyle.html">Kyle</a></li>
		</ul>
	</div>
</div>

<main class="default">

<?php
  if (mail($to, $subject, $message, $header)){
    echo "	<h1>Thank You, your email has been sent!<br>
	We will contact you as soon as possible.</h1>";
  } else {
    echo "<h1>Error: something went wrong.</h1>";
  }
?>

	<p>You will be returned to the contact me page...</p>
</main>


<footer>
	<p>&copy; 2017 &bull; Erick Perez</p>
</footer>

</body>
</html>
