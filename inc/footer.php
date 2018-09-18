<footer class="footer_one clear">
  <div class="clear">
    <article class="about">
      <h1>About us</h1>
      <p>The T-Series StageWorks Academy is a joint-venture initiative designed to identify, nurture and create a pool of immensely skilful and passionate professionals who can match national and global demands. Carrying the flag of Sh. Gulshan Kumar, Founder of T-Series, the Academy has been formed with a commitment to fostering creativity and talent by offering structured courses in the fields of film, music, dance, and performing and media arts.</p>
    </article>
    <article class="services">
      <h1>Courses Offered</h1>
      <ul>
        <?php
  $mysqli=connect();
  $sql = "SELECT post_title,post_name FROM wp_posts where post_status='publish' and post_type='course'";
  $res = mysqli_query($mysqli,$sql);
  while ($row = mysqli_fetch_array($res))
  {
	  ?>
      <li><a href="../programs/<?php echo $row['post_name']; ?>"><span class="fa fa-angle-right"></span><?php echo $row['post_title']; ?></a></li>
      <?php
  }
  disconnect($mysqli);
  ?>
      </ul>
    </article>
    <article class="services">
      <h1>Quick Links</h1>
      <ul>
        <li><a href="../blog" target="new"><span class="fa fa-angle-right"></span>Blog</a></li>
        <li><a href="../downloads/application.pdf" target="new"><span class="fa fa-angle-right"></span>Download Application Form</a></li>
        <li><a href="../downloads/brochure.pdf" target="new"><span class="fa fa-angle-right"></span>Download Brochure</a></li>
        <li><a href="../sitemap.xml" target="new"><span class="fa fa-angle-right"></span>Site Map</a></li>
      </ul>
    </article>
    <article class="contact">
      <h1>Contacts</h1>
      <ul class="clear">
        <li><span class="fa fa-map-marker"></span></li>
        <li>T-Series StageWorks B 12, Sector-62<br>
          Noida, Uttar Pradesh 201309</li>
      </ul>
      <ul class="clear">
        <li><span class="fa fa-phone"></span></li>
        <li><a href="tel:+91 9599008535">+91 9599008535</a></li>
      </ul>
      <ul class="clear">
        <li><span class="fa fa-phone"></span></li>
        <li><a href="tel:+91 9599008536">+91 9599008536</a></li>
      </ul>
      <ul class="clear">
        <li><span class="fa fa-at"></span></li>
        <li><a href="mailto:info@tseriesstageworks.com">info@tseriesstageworks.com</a></li>
      </ul>
    </article>
  </div>
</footer>
<footer class="footer_two"> <a href="../"><img src="../img/logo.jpg" class="logo"></a>
  <h1>&copy; copyright 2015 By T-Series StageWorks. All Rights Reserved. Site by <a href="http://www.krpl.in">krpl.in</a></h1>
  <ul class="clear social">
    <li><a target="_blank" href="https://www.facebook.com/TseriesStageWorks/"><span class="fa fa-facebook"></span></a></li>
    <li><a target="_blank" href="https://plus.google.com/u/0/105151217819420060732/posts"><span class="fa fa-google-plus"></span></a></li>
    <li><a target="_blank" href="https://twitter.com/TStageWorks"><span class="fa fa-twitter"></span></a></li>
    <li><a target="_blank" href="https://instagram.com/tseriesstageworks/"><span class="fa fa-instagram"></span></a></li>
  </ul>
  <!--<ul class="clear link">
    <li><a href="">home</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">about</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">programs</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">campus life</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">employability</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">alumni</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">admissions</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">apply now</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">sitemap</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">blog</a></li>
    <li><span class="fa fa-angle-right"></span></li>
    <li><a href="">contact</a></li>
  </ul>-->
</footer>