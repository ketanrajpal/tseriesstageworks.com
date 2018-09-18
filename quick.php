<?php
ob_start();
$file = fopen('quick.csv','a');
$cvsData=$_POST["name"].",".$_POST["email"].",".$_POST["phone"].",".$_POST["course"]."\n";
fwrite($file,$cvsData);
fclose($file);
header("Location: ../");
exit();
?>