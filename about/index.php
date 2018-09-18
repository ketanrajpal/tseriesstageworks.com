<?php
ob_start();
$page="about";
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

<section id="home-section-4">

 <h1>About Us</h1>
 <p>"The T-Series StageWorks Academy is an exceptional educational institution where a student can achieve great heights in academic, vocational and artistic studies." <br><br>

The T-Series StageWorks Academy is a joint-venture initiative designed to identify, nurture and create a pool of immensely skillful and passionate professionals who can match national and global demands. Carrying the flag of Sh. Gulshan Kumar, Founder of T-Series, the Academy has been formed with a commitment to fostering creativity and talent by offering structured courses in the fields of film, music, dance, and performing and media arts.<br><br>

The StageWorks Team is dedicated to education and vocational training for the performing arts, media, art and design and the technologies that make performance possible.<br><br>

The Team is led by Mr. Bhushan Kumar, along with leading Bollywood singer Ms. Tulsi Kumar Ralhan and Mr. Hitesh Ralhan, who have joined hands with eminent educationists Mr. Vipin Sahni and Mr. Aman Sahni to establish and operate this noble cause and wonderful opportunity for potential learners.<br><br>

We pride ourselves on providing an excellent all round education that helps prepare our students for the future. We encourage them to go on to further their specialized education or into employment in the creative industries. Indeed the majority do so.<br><br>

Devoted to the arts, we deeply understand that Industry technology is essential for a complete education. The best resources to allow students to study, practice and hone their skill in sophisticated environments equivalent modern workplaces. That is what we offer.<br><br>

We have opened our first academy in Noida, where Sh. Gulshan Kumar’s T-Series started its incredible journey! Apart from modern infrastructure and world-class equipment, the academy boasts of a team of distinguished advisors and a group of immensely talented faculty for all courses.<br><br>



We are also in the process of extending our wings to open institutes in other cities in India as well as internationally.<br><br>

A unique gift is on offer at StageWorks. Our students greatly benefit from the advice and support given by the staff from our wide range of friends in the music and wider arts industries.<br><br>

The Academy nurtures a unique atmosphere of support and respect, which helps enhance the ability and talent of impressionable student body. Students and staff create an open and friendly working atmosphere, all the maintaining their rigorous approach towards their respective feilds.<br><br>

Our achievements and results testify to our success.<br><br>
</p>

</section>

<section id="content">
 <h1>Advisory Board</h1>
  <ul class="management clear">
 <?php
  $mysqli=connect();
  $sql = "SELECT post_title, post_name, post_content, ID FROM wp_posts where post_status='publish' and post_type='team-member'";
  $res = mysqli_query($mysqli,$sql);
  while ($row = mysqli_fetch_array($res))
  {
	  ?>

       <li>
        <div class="left-image">
         <img src="<?php echo getvalue($row['ID'],"wpcf-team-member-profile-picture"); ?>">
        </div>
        <div class="right-content">
         <h5><?php echo $row['post_title']; ?></h5>
         <p><?php echo getvalue($row['ID'],"wpcf-team-member-description"); ?></p>
        </div>
       </li>
      
 <?php
  }
  disconnect($mysqli);
  ?>
  </ul>
</section>

</section>

<?php require_once("../inc/footer.php"); ?>
</body>
</html>