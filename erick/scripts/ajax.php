<?php 
  $name = $_REQUEST['name'];
  $from = $_REQUEST['from'];
  $body = $_REQUEST['body'];

  //$to = "hiro@mrhiro.com"; //recipient 
$to = "NBA_EAP@hotmail.com";

  $subject = "RIA Emails"; //subject 
  $header = "From: ". $name . " <" . $from . ">\r\n";

  if (mail($to, $subject, $body, $header)){
    echo "<h1>Thank You, your email has been sent!";  
  } else {
    echo "<h1>Error: something went wrong.</h1>";
  }

?>