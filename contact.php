<?php
ob_start();
$file = fopen('contact.csv','a');
$cvsData=$_POST["name"].",".$_POST["email"].",".$_POST["phone"].",".$_POST["course"].",".$_POST["message"]."\n";
fwrite($file,$cvsData);
fclose($file);
?>
<!DOCTYPE HTML>
<html>
 <head>
  <title>Thankyou For your Enquiry.</title>
  <meta http-equiv="refresh" content="3;URL=http://www.tseriesstageworks.com/">
 </head>
 <body>
<img style="display:none" src='//www.googleadservices.com/pagead/conversion/938367141/?label=OWtZCOyfg2cQpbG5vwM&guid=ON&script=0' height='1px' width='1px' />
<h4>Thankyou for You Enquiry.</h4>
</body>
</html>