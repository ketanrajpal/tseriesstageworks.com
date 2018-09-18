<?php
ob_start();
$page="about";
error_reporting(0);
require_once("../inc/function.php");
require('recaptchalib.php');
$feedback_error="";
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$privatekey = "6LcgbBATAAAAAGBLNUhxtd88o97-TNHCCKCnwuoe";
	$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);
	if(!$resp->is_valid)
	{
		$feedback_error="The reCAPTCHA wasn't entered correctly. Please try again.";
	}
	else
	{
		if(!empty($_POST["name"])||!empty($_POST["email"])||!empty($_POST["address"])||!empty($_POST["tele"]))
		{
			
			$pic=md5($_POST["name"].$_POST["email"]);
			/*$temp = explode(".", $_FILES["photograph"]["name"]);
			$newfilename = $pic . '.' . end($temp);
			move_uploaded_file($_FILES["photograph"]["tmp_name"], "/pic/" . $newfilename);*/
			
			$mysqli=connect();
			$sql = "INSERT into application_form(course,photograph,title,`name`,dob,mobile,email,nationality,height,weight,address,pin,tele,co_address,co_pin,co_tele,`physical-injury`,hear)VALUES('".$_POST["course"]."','".$pic."','".$_POST["title"]."','".$_POST["name"]."','".$_POST["dob"]."','".$_POST["mobile"]."','".$_POST["email"]."','".$_POST["nationality"]."','".$_POST["height"]."','".$_POST["weight"]."','".$_POST["address"]."','".$_POST["pin"]."','".$_POST["tele"]."','".$_POST["co_address"]."','".$_POST["co_pin"]."','".$_POST["co_tele"]."','".$_POST["physical-injury"]."','".$_POST["hear"]."')";
			//echo $sql;
			mysqli_query($mysqli,$sql);
			disconnect($mysqli);
			$feedback_error="Thankyou for your enquiry. We will contact you within 24-48hrs.<br><br>Please bring your Passport size photograph and a sum of Rs.500/- at the time of registration.";
		}
		else
		{
			$feedback_error="Please fill in all the fields correctly and Submit.";
		}
	}
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<?php require_once("../inc/meta.php"); ?>
<?php require_once("../inc/head.php"); ?>
<script src="../js/validate.min.js"></script>
<script>
   var country=[ "Afghanistan" , "Albania" , "Algeria" , "Angola" , "Anguilla" , "Antigua and Barbuda" , "Argentina" , "Armenia" , "Aruba" , "Ascension Islands" , "Australia" , "Austria" , "Azerbaijan" , "Bahamas" , "Bahrain" , "Bangladesh" , "Barbados" , "Belarus" , "Belgium" , "Belize" , "Benin" , "Bermuda" , "Bhutan" , "Bolivia" , "Bosnia and Herzegovina" , "Botswana" , "Brazil" , "British Virgin Islands" , "Bulgaria" , "Burkina Faso" , "Burundi" , "Cameroon" , "Canada" , "Cape Verde" , "Cayman Islands" , "Central African Republic" , "Chad" , "Chile" , "China" , "Colombia" , "Comoros" , "Congo - Democratic Republic of" , "Congo - Republic of" , "Costa Rica" , "Croatia" , "Cyprus" , "Czech Republic" , "Denmark" , "Djibouti" , "Dominica" , "Dominican Republic" , "Ecuador" , "Egypt" , "El Salvador" , "Equatorial Guinea" , "Eritrea" , "Estonia" , "Ethiopia" , "Faroe Islands" , "Finland" , "France" , "Gabon" , "Gambia" , "Georgia" , "Germany" , "Ghana" , "Gibraltar" , "Greece" , "Greenland" , "Grenada" , "Guadeloupe" , "Guatemala" , "Guinea" , "Guinea-Bissau" , "Guyana" , "Haiti" , "Honduras" , "Hong Kong" , "Hungary" , "Iceland" , "India" , "Indonesia" , "Iraq" , "Ireland" , "Israel" , "Italy" , "Ivory Coast" , "Jamaica" , "Japan" , "Jordan" , "Kampuchea" , "Kazakhstan" , "Kenya" , "Korea" , "Kosovo" , "Kuwait" , "Kyrgyzstan" , "Laos" , "Latvia" , "Lebanon" , "Lesotho" , "Liberia" , "Libya" , "Liechtenstein" , "Lithuania" , "Luxembourg" , "Macedonia" , "Madagascar" , "Malawi" , "Malaysia" , "Maldives" , "Mali" , "Malta" , "Martinique" , "Mauritania" , "Mauritius" , "Mayotte" , "Mexico" , "Moldova" , "Monaco" , "Mongolia" , "Montenegro" , "Montserrat" , "Morocco" , "Mozambique" , "Myanmar" , "Namibia" , "Nepal" , "Netherlands" , "Netherlands Antilles" , "New Zealand" , "Nicaragua" , "Niger" , "Nigeria" , "Norway" , "Oman" , "Pakistan" , "Palestinian Territory" , "Panama" , "Paraguay" , "Peru" , "Philippines" , "Poland" , "Portugal" , "Qatar" , "Romania" , "Russia" , "Rwanda" , "Saint Kitts and Nevis" , "Saint Lucia" , "Saint Martin" , "Saint Vincent and The Grenadines" , "Sao Tome and Principe" , "Saudi Arabia" , "Senegal" , "Serbia" , "Seychelles" , "Sierra Leone" , "Singapore" , "Slovakia" , "Slovenia" , "Somalia" , "South Africa" , "Spain" , "Sri Lanka" , "Suriname" , "Swaziland" , "Sweden" , "Switzerland" , "Taiwan" , "Tajikistan" , "Tanzania" , "Thailand" , "Togo" , "Trinidad and Tobago" , "Tunisia" , "Turkey" , "Turkmenistan" , "Turks and Caicos" , "United Kingdom" , "Uganda" , "Ukraine" , "United Arab Emirates" , "United States" , "Uruguay" , "Uzbekistan" , "Venezuela" , "Vietnam" , "Western Sahara" , "Yemen" , "Zambia" , "Zimbabwe" , "Other" ];

$(document).ready(function(){

	for(i=0;i<country.length;i++)
	{
		$("#nationality").append("<option value='"+country[i]+"'>"+country[i]+"</option>");
	}
	
});
  </script>

</head>
<body>
<?php require_once("../inc/header.php"); ?>
<section id="content" class="contact clear">
  <article>
    <h1>Application for Admission</h1>
    <form id="application-form" method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
    <div class="error"><?php echo $feedback_error; ?></div>
    <br><br>
      <fieldset class="full">
        <label for="course"><strong style="font-weight:600">Course</strong>:</label>
        <ul class="listing clear">
          <li style="font-size:18px !important;">Dance
            <input type="checkbox" value="Dance" name="course" required>
          </li>
          <li style="font-size:18px !important;">Modeling
            <input type="checkbox" value="Modeling" name="course">
          </li>
          <li style="font-size:18px !important;">Singing
            <input type="checkbox" value="Singing" name="course">
          </li>
          <li style="font-size:18px !important;">Acting
            <input type="checkbox" value="Acting" name="course">
          </li>
          <li style="font-size:18px !important;">Guitar
            <input type="checkbox" value="Guitar" name="course">
          </li>
          <li style="font-size:18px !important;">Photography
            <input type="checkbox" value="Photography" name="course">
          </li>
        </ul>
      </fieldset>
      <fieldset class="full">
        <label for="photograph"><strong style="font-weight:600">Upload your photograph</strong></label>
        <input type="file" id="photograph" name="photograph">
      </fieldset>
      <fieldset>
        <label for="title">Title</label>
        <select id="title" name="title" required>
         <option value="" selected disabled></option>
         <option value="Mr">Mr</option>
         <option value="Miss">Miss</option>
         <option value="Mrs">Mrs</option>
         <option value="Ms">Ms</option>
        </select>
      </fieldset>
      <fieldset>
        <label for="name">Name</label>
        <input type="text" size="30" maxlength="25" id="name" name="name" required autocomplete="off">
      </fieldset>
      <div class="clear"></div>
      <fieldset>
        <label for="dob">Date of birth</label>
        <input type="date" size="30" maxlength="25" id="dob" name="dob" required autocomplete="off">
      </fieldset>
      <fieldset>
        <label for="mobile">Mobile</label>
        <input type="number" size="30" maxlength="10" id="mobile" name="mobile" required autocomplete="off">
      </fieldset>
      <div class="clear"></div>
      <fieldset>
        <label for="email">E-mail</label>
        <input type="email" maxlength="55" id="email" name="email" required autocomplete="off">
      </fieldset>
      <fieldset>
        <label for="nationality">Nationality:</label>
        <select id="nationality" name="nationality" required>
          <option value="" selected disabled>Select a Nationality</option>
        </select>
      </fieldset>
      <div class="clear"></div>
      <fieldset>
        <label for="height">Height</label>
        <input type="text" size="30" maxlength="25" id="height" name="height" autocomplete="off">
      </fieldset>
      <fieldset>
        <label for="weight">Weight</label>
        <input type="text" size="30" maxlength="25" id="weight" name="weight" autocomplete="off">
      </fieldset>
      <fieldset class="full">
        <label>Address</label>
        <textarea rows="3" cols="30" id="address" name="address" required autocomplete="off"></textarea>
      </fieldset>
      <fieldset>
        <label for="pin">Post Code</label>
        <input type="number" size="30" maxlength="6" id="pin" name="pin" required autocomplete="off">
      </fieldset>
      <fieldset>
        <label for="tele">Telephone</label>
        <input type="number" size="30" maxlength="10" id="tele" name="tele" autocomplete="off">
      </fieldset>
      <fieldset class="full">
        <label for="co_address">Address to which communication can be sent(If different from above)</label>
        <textarea rows="3" cols="30" id="co_address" name="co_address"></textarea>
        <br/>
      </fieldset>
      <fieldset class="full">
        <p>Do you have any physical injuries, disabilities or chronic illness which require regular medication
          or medical attention?
          
          <ul class="listing clear">
           <li>Yes <input type="checkbox" name="physical-injury" value="Yes"></li>
           <li>No <input type="checkbox" name="physical-injury" value="No"></li>
          </ul>
          
          
          
        </p><br><br>
        <p>How did you hear about T-Series StageWorks?
        
        <ul class="listing clear">
         <li>Friends & Relatives <input value="Friends & Relatives" type="radio" name="hear" required></li>
         <li>Website <input type="radio" value="Website" name="hear"></li>
         <li>Media/Editorial/Ad <input  value="Media/Editorial/Ad" type="radio" name="hear"></li>
         <li>Others <input type="radio" value="Others" name="hear"></li>
        </ul>
        </p>
        <br/>
      </fieldset>
      
      <fieldset class="full">
       <?php
     require_once('recaptchalib.php');
     $publickey = "6LcgbBATAAAAAEWbVKIgJ7U_VWBzjAYDAvDnkEal"; // you got this from the signup page
     echo recaptcha_get_html($publickey);
   ?>
      </fieldset>
      
      <input type="submit" value="Register">
    </form>
    <script>
$("#application-form").validate();
</script> 
  </article>
  <article>
    <h1>Reach us at</h1>
    <p><strong>Address:</strong><br>
      T-Series StageWorks B 12, Sector-62<br>
      Noida, Uttar Pradesh 201309 <br>
      <br>
      <strong>Phone:</strong> +91 9599008535 / +91 9599008536<br>
      <strong>Email:</strong> <a href="mailto:info@tseriesstageworks.com">info@tseriesstageworks.com</a><br>
      <strong>Website:</strong> <a href="http://www.tseriesstageworks.com">www.tseriesstageworks.com</a></p>
  </article>
</section>
<?php require_once("../inc/footer.php"); ?>
</body>
</html>