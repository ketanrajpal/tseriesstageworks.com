<?php
ob_start();
$page="word-of-mouth";
require_once("../inc/function.php");
$slug=$_GET["slug"];
$category_id;
$post_id;
$sql="select name, term_id from wp_terms where slug='".$slug."'";
$mysqli=connect();
$res = mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_array($res)){
	$page_name= $row['name'];
	$sql1="select description from wp_term_taxonomy where taxonomy='product-category' and parent='0' and term_id='".$row['term_id']."'";
	$res1 = mysqli_query($mysqli,$sql1);
	$category_id=$row['term_id'];
	while ($row1 = mysqli_fetch_array($res1)){
		$description=$row1['description'];
	}
}
disconnect($mysqli);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<?php require_once("../inc/meta.php"); ?>
<?php require_once("../inc/head.php"); ?>
<script type="text/javascript" src="source/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css" media="screen" />
</head>
<body>
<?php require_once("../inc/header.php"); ?>
<section id="home-section-1">

<style>
#home-section-1 li{
	width: 30% !important;
	margin: 30px 0px !important;
	margin-right: 3% !important;
	float: left !important;
}
</style>


<?php
$image=array();
$image_description=array();
$video=array();
$video_description=array();


  $mysqli=connect();
  $sql1="select object_id from wp_term_relationships where term_taxonomy_id='".$category_id."'";
		$res1 = mysqli_query($mysqli,$sql1);
		while ($row1 = mysqli_fetch_array($res1)){
			
  $sql = "SELECT post_title, post_name, post_content, ID FROM wp_posts where post_status='publish' and post_type='gallery' and ID='".$row1["object_id"]."'";
  $res = mysqli_query($mysqli,$sql);
  while ($row = mysqli_fetch_array($res))
  { ?>
	  <h1><?php echo $row['post_title']; ?></h1>
      <p><?php echo $row['post_content']; ?></p>
  <?php
  
  $image=get_array($row['ID'], "wpcf-image");
  $image_description=get_array($row['ID'], "wpcf-image-description");
  $video=get_array($row['ID'], "wpcf-video-id");
  $video_description=get_array($row['ID'], "wpcf-video-description");
  
  }
  
?>
<ul>
<?php
				   		for($x=0;$x<count($image);$x++)
						{
							if(count($image)==1){
								break;}
							
							?>
                            
                            
                            
                            <li>
                            <a class="fancybox" rel="group" href="<?php echo $image[$x]; ?>" title="">
                             <img width="100%" src="<?php echo $image[$x]; ?>" alt="" /></a><br>
      <br>
      
    </li>
                            <?php
						}
?>
</ul>

<br><br>

<ul class="clear">

<?php
				   		for($x=0;$x<count($video);$x++)
						{
							?>
    <li>
      <iframe width="100%" height="204" src="https://www.youtube.com/embed/<?php echo $video[$x]; ?>?rel=0&amp;controls=0&amp;showinfo=0&VQ=HD720" frameborder="0" allowfullscreen></iframe>
      <h2><?php echo $video_description[$x]; ?></h2>
    </li>
                            <?php
						}
?>
  </ul>
  
  
  
  
  <?php } disconnect($mysqli); ?>
  
  <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox({
		helpers		: {
			title	: { type : 'inside' }
		}
	});
	});
</script>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>