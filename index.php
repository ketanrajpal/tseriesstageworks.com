<?php
ob_start();
$page="index";
$name="Home";
$title="Home Page";
require_once("inc/function.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<?php require_once("inc/meta.php"); ?>
<?php require_once("inc/head.php"); ?>
</head>
<body>
<?php require_once("inc/header.php"); ?>

<?php require_once("inc/courses.php"); ?>

<!--
<div class="profile_bg"></div>

<div class="detailed">
 <img src="../img/close-detailed.png" class="close">
 <a href="../popup"><img src="../img/banner.jpg" width="100%"></a>
</div>
-->
<script>

$(document).ready(function(){

	var x=$(window).height();
	var y=$(window).width();
	var imgy=800;
	var finy=y-imgy;	
	$(".detailed").css({
		left: finy/2
	});
	
	$(".profile_bg").height(x);
	$(".profile_bg").width(y);
	
});

$(".close").click(function(){

	$(".detailed").fadeOut("slow");	
	$(".profile_bg").fadeOut("fast");	
	
});


</script>


<section id="home-section-2">
  <h1>Campus</h1>
  <p>At our new campus in sector 62, Noida, we are located at a strategic location which is only a few minutes away from the prime localities of Noida, Mayur Vihar, Vaishali, Indirapuram, Laxmi Nagar, Kaushambi, Ghaziabad etc. Adjacent to the NH24 highway, it is within 5-7 minutes driving range from Delhi.</p>
  <center>
    <a href="../campus">Read More<span class="fa fa-chevron-circle-right"></span></a>
  </center>
</section>
<section id="home-section-3">
  <ul class="clear">
    <li>
      <div class="fa fa-thumbs-up"></div>
      <h2>Advisory Board</h2>
      <p>Apart from modern infrastructure and world class equipments, the academy boasts of a team of distinguished advisors and a pull of immensely talented faculties for all courses.</p>
      <a href="../about">Read More<span class="fa fa-chevron-circle-right"></span></a> </li>
    <li>
      <div class="fa fa-university"></div>
      <h2>Our campus</h2>
      <p>The state of art campus has a regal British styled building, and enjoys many modern facilities including the impressive exquisite audio and video studios, dance studio etc.</p>
      <a href="../campus">Read More<span class="fa fa-chevron-circle-right"></span></a> </li>
    <li>
      <div class="fa fa-phone"></div>
      <h2>Contact us</h2>
      <p>At our new campus in sector 62, Noida, we are located at a strategic location which is only a few minutes away from the prime localities</p>
      <a href="../contact">Read More<span class="fa fa-chevron-circle-right"></span></a> </li>
  </ul>
</section>
<?php require_once("inc/footer.php"); ?>
</body>
</html>