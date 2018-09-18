<?php
ob_start();
if(!isset($_GET["slug"]))
{
	$page="programs";
}
else
{
	$page=$_GET["slug"];
}
require_once("../inc/function.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<?php require_once("../inc/meta.php"); ?>
<?php require_once("../inc/head.php"); ?>
</head>
<body>
<?php require_once("../inc/header.php"); ?>

<?php
if(!isset($_GET["slug"]))
{
	require_once("../inc/courses.php");
}
else
{
	?>
    
    <?php
  $mysqli=connect();
  $sql = "SELECT post_title, post_name, post_content, ID FROM wp_posts where post_status='publish' and post_type='course' and post_name='".$_GET["slug"]."'";
  $res = mysqli_query($mysqli,$sql);
  while ($row = mysqli_fetch_array($res))
  {
	  ?>
      <section id="content">
      <h1><?php echo $row['post_title']; ?></h1>
      
      <ul class="tab-list clear">
       <li>
        <h3>Course Duration</h3>
        <p><?php echo getvalue($row['ID'],"wpcf-course-duration"); ?></p>
       </li>
       <li>
        <h3>Fee</h3>
        <p><?php echo getvalue($row['ID'],"wpcf-course-fee"); ?></p>
       </li>
       <li>
        <h3>Course Schedule</h3>
        <p><?php echo getvalue($row['ID'],"wpcf-course-schedule"); ?></p>
       </li>
      </ul>
      
      <p><?php echo $row['post_content']; ?></p>
      
      
      <ul class="management clear">
      <?php if(getvalue($row['ID'],"wpcf-course-director-name")!=""){ ?>
       <li>
        <h4>Course Director</h4>
        <div class="left-image">
         <img src="<?php echo getvalue($row['ID'],"wpcf-course-director-image"); ?>">
        </div>
        <div class="right-content">
         <h5><?php echo getvalue($row['ID'],"wpcf-course-director-name"); ?></h5>
         <p><?php echo getvalue($row['ID'],"wpcf-course-director-description"); ?></p>
        </div>
       </li>
       <?php } if(getvalue($row['ID'],"wpcf-lead-faculty-name")!=""){ ?>
       <li>
        <h4>Lead Faculty</h4>
        <div class="left-image">
         <img src="<?php echo getvalue($row['ID'],"wpcf-lead-faculty-image"); ?>">
        </div>
        <div class="right-content">
         <h5><?php echo getvalue($row['ID'],"wpcf-lead-faculty-name"); ?></h5>
         <p><?php echo getvalue($row['ID'],"wpcf-lead-faculty-description"); ?></p>
        </div>
       </li>
       <?php } ?>
      </ul>
      
      
      <ul class="management clear">
      <?php if(getvalue($row['ID'],"wpcf-faculty-name-one")!=""){ ?>
       <li>
        <h4><?php echo getvalue($row['ID'],"wpcf-faculty-designation-one"); ?></h4>
        <div class="left-image">
         <img src="<?php echo getvalue($row['ID'],"wpcf-faculty-image-one"); ?>">
        </div>
        <div class="right-content">
         <h5><?php echo getvalue($row['ID'],"wpcf-faculty-name-one"); ?></h5>
         <p><?php echo getvalue($row['ID'],"wpcf-faculty-description-one"); ?></p>
        </div>
       </li>
       <?php } if(getvalue($row['ID'],"wpcf-faculty-name-two")!=""){ ?>
       <li>
        <h4><?php echo getvalue($row['ID'],"wpcf-faculty-designation-two"); ?></h4>
        <div class="left-image">
         <img src="<?php echo getvalue($row['ID'],"wpcf-faculty-image-two"); ?>">
        </div>
        <div class="right-content">
         <h5><?php echo getvalue($row['ID'],"wpcf-faculty-name-two"); ?></h5>
         <p><?php echo getvalue($row['ID'],"wpcf-faculty-description-two"); ?></p>
        </div>
       </li>
       <?php } ?>
      </ul>

      </section>
      <?php
  }
  disconnect($mysqli);
  ?>
    
    <h1></h1>
    
    <?php
}
?>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>