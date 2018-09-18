<?php
ob_start();
$page="contact";
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
<section id="content" class="contact clear">
  <article style="border-right:1px solid #ededed;">
    <h1>Enquiry</h1>
    <form id="contact-page" method="post" action="contact.php" onSubmit="return alert('Thankyou for your enquiry. We will get back to as soon as possible.');">
    <fieldset>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required>
    </fieldset>
    <fieldset>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
    </fieldset>
    <fieldset>
      <label for="phone">Phone</label>
      <input type="text" name="phone" id="phone" required>
    </fieldset>
    <fieldset>
      <label for="subject">Course</label>
      <select id="course" name="course">
       <option disabled selected>Select a Course</option>
       <?php
  $mysqli=connect();
  $sql = "SELECT post_title,post_name FROM wp_posts where post_status='publish' and post_type='course'";
  $res = mysqli_query($mysqli,$sql);
  while ($row = mysqli_fetch_array($res))
  {
	  ?>
      <option value="<?php echo $row['post_title']; ?>"><?php echo $row['post_title']; ?></option>
      <?php
  }
  disconnect($mysqli);
  ?>
      </select>
    </fieldset>
    <div class="clear"></div>
    <br>
    <fieldset>
    <label>Location</label>
      <select name="location" id="location">
		    <option value="Select Location" disabled="" selected="">Select Location</option>
		    <option>Agra</option>
		    <option>Ahmedabad</option>
		    <option>Ajmer</option>
		    <option>Alappuzha</option>
		    <option>Aligarh</option>
		    <option>Allahabad</option>
		    <option>Alwar</option>
		    <option>Ambernath</option>
		    <option>Amritsar</option>
		    <option>Anand</option>
		    <option>Anantapur</option>
		    <option>Andaman and Nicobar Islands</option>
		    <option>Aurangabad</option>
		    <option>Bangalore</option>
		    <option>Barddhaman</option>
		    <option>Bareilly</option>
		    <option>Belgaum</option>
		    <option>Bellary</option>
		    <option>Berhampur</option>
		    <option>Bhavnagar</option>
		    <option>Bhilai</option>
		    <option>Bhopal</option>
		    <option>Bhubaneswar</option>
		    <option>Bijapur</option>
		    <option>Bilaspur</option>
		    <option>Bokaro Steel City</option>
		    <option>Chandigarh</option>
		    <option>Chennai</option>
		    <option>Chittoor</option>
		    <option>Coimbatore</option>
		    <option>Cuttack</option>
		    <option>Dadra and Nagar Haveli</option>
		    <option>Daman and Diu</option>
		    <option>Dehradun</option>
		    <option>Delhi</option>
            <option>North Delhi</option>
            <option>South Delhi</option>
            <option>West Delhi</option>
            <option>East Delhi</option>
            <option>Noida</option>
		    <option>Dhanbad</option>
		    <option>Dharwad</option>
		    <option>Dhule</option>
		    <option>Dombivli</option>
		    <option>Durgapur</option>
		    <option>Eluru</option>
		    <option>Ernakulam</option>
		    <option>Erode</option>
		    <option>Faridabad</option>
		    <option>Gandhinagar</option>
		    <option>Ghaziabad</option>
		    <option>Gorakhpur</option>
		    <option>Guntur</option>
		    <option>Gurgaon</option>
		    <option>Guwahati</option>
		    <option>Gwalior</option>
		    <option>Haldwani</option>
		    <option>Hosur</option>
		    <option>Hubballi</option>
		    <option>Hyderabad</option>
		    <option>Imphal</option>
		    <option>Indore</option>
		    <option>Irumbuliyur</option>
		    <option>Jabalpur</option>
		    <option>Jaipur</option>
		    <option>Jalandhar</option>
		    <option>Jalgaon</option>
		    <option>Jammu</option>
		    <option>Jamnagar</option>
		    <option>Jamshedpur</option>
		    <option>Jhansi</option>
		    <option>Jodhpur</option>
		    <option>Kakinada</option>
		    <option>Kalyan</option>
		    <option>Kangra</option>
		    <option>Kannur</option>
		    <option>Kanpur</option>
		    <option>Karimnagar</option>
		    <option>Karnal</option>
		    <option>Kochi</option>
		    <option>Kolhapur</option>
		    <option>Kolkata</option>
		    <option>Kollam</option>
		    <option>Kota</option>
		    <option>Kottayam</option>
		    <option>Kozhikode</option>
		    <option>Kurnool</option>
		    <option>Lakshadweep</option>
		    <option>Latur</option>
		    <option>Lucknow</option>
		    <option>Ludhiana</option>
		    <option>Madurai</option>
		    <option>Mangalore</option>
		    <option>Manipal</option>
		    <option>Margaon</option>
		    <option>Mathura</option>
		    <option>Mavelikkara</option>
		    <option>Meerut</option>
		    <option>Mira Bhayandar</option>
		    <option>Moradabad</option>
		    <option>Mormugao</option>
		    <option>Mumbai</option>
		    <option>Mysore</option>
		    <option>Nadiad</option>
		    <option>Nagpur</option>
		    <option>Nanded</option>
		    <option>Nashik</option>
		    <option>Navi Mumbai</option>
		    <option>Nellore</option>
		    <option>New Delhi</option>
		    <option>Noida</option>
		    <option>Palakkad</option>
		    <option>Panaji</option>
		    <option>Patiala</option>
		    <option>Patna</option>
		    <option>Pilani</option>
		    <option>Pimpri Chinchwad</option>
		    <option>Pondicherry</option>
		    <option>Puducherry</option>
		    <option>Pune</option>
		    <option>Raipur</option>
		    <option>Rajahmundry</option>
		    <option>Rajkot</option>
		    <option>Ranchi</option>
		    <option>Roorkee</option>
		    <option>Rourkela</option>
		    <option>Sagar</option>
		    <option>Salem</option>
		    <option>Sambalpur</option>
		    <option>Sangrur</option>
		    <option>Satna</option>
		    <option>Secunderabad</option>
		    <option>Sembakkam</option>
		    <option>Shillong</option>
		    <option>Shimla</option>
		    <option>Silchar</option>
		    <option>Siliguri</option>
		    <option>Sivakasi</option>
		    <option>Solapur</option>
		    <option>Sonepat</option>
		    <option>Srinagar</option>
		    <option>Surat</option>
		    <option>Tezpur</option>
		    <option>Thane</option>
		    <option>Thanjavur</option>
		    <option>Thiruvananthapuram</option>
		    <option>Thrissur</option>
		    <option>Tiruchirappalli</option>
		    <option>Tirunelveli</option>
		    <option>Tirupati</option>
		    <option>Udaipur</option>
		    <option>Ulhasnagar</option>
		    <option>Vadodara</option>
		    <option>Vapi</option>
            <option>Vashi</option>
		    <option>Varanasi</option>
		    <option>Vasai</option>
		    <option>Vellore</option>
		    <option>Vijayawada</option>
		    <option>Virar</option>
		    <option>Virudhunagar</option>
		    <option>Visakhapatnam</option>
		    <option>Warangal</option>
		    <option>Other</option>
		    </select>
    </fieldset>
    <input type="submit" value="Submit">
  </form>
  </article>
  <article>
    <h1 style="font-weight:700;">Reach us at</h1>
    <p><strong>Upcomming Campus</strong><br>T-Series StageWorks Plot 3, Film City, Sector 16A<br>
      Noida, Uttar Pradesh 201301 <br><br>
      <p><strong>Campus 2:</strong><br>T-Series StageWorks B 12, Sector-62<br>
      Noida, Uttar Pradesh 201309 <br><br>
      <strong>Phone:</strong> +91 9599008535 / +91 9599008536<br>
      <strong>Email:</strong> <a href="mailto:info@tseriesstageworks.com">info@tseriesstageworks.com</a><br>
      <strong>Website:</strong> <a href="http://www.tseriesstageworks.com">www.tseriesstageworks.com</a></p>
  </article>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23560.924514064318!2d77.36639633137574!3d28.619199060107714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5456ef36d9f%3A0x3b7191b1286136c8!2sSector+62%2C+Noida%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1446148343745" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>