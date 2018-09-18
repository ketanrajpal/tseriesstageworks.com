<?php
function getimg($id,$post_title)
	{
		$mysqli=connect();
		$sql="select `guid` from `wp_posts` where post_type='attachment' and ID=(select meta_value from wp_postmeta where post_id='".$id."' and meta_key='_thumbnail_id' LIMIT 1)";
		$query=mysqli_query($mysqli,$sql);
		$result=mysqli_fetch_array($query);
		disconnect($mysqli);
		return $result[0];
	}
?>
<section id="home-section-1" class="clear">
 <article style="width:69%;float:left;border-right:1px solid #CCC;">
  <h1>Programs We Offer</h1>
  <ul class="clear">
  <?php
  $mysqli=connect();
  $sql = "SELECT post_title, post_name, post_content, ID FROM wp_posts where post_status='publish' and post_type='course'";
  $res = mysqli_query($mysqli,$sql);
  while ($row = mysqli_fetch_array($res))
  {
	  ?>
      <li>
      <img src="../img/<?php echo $row['post_name']; ?>.jpg">
      <h2><?php echo $row['post_title']; ?></h2>
      <p><?php echo substr($row['post_content'],0,150); ?>...</p>
      <a href="../programs/<?php echo $row['post_name']; ?>">Read More<span class="fa fa-chevron-circle-right"></span></a>
      </li>
      <?php
  }
  disconnect($mysqli);
  ?>
  </ul>
  </article>
  <article style="width:29%;float:right;">
   <h1 style="color:#ec3237;">From the Blog</h1>
   <ul>
     <?php
	$mysqli=connect();
	$sql = "SELECT post_title, ID, guid, post_content,post_name FROM wp_posts where post_status='publish' and post_type='post' ORDER BY post_date DESC LIMIT 5";
	$result = mysqli_query($mysqli, $sql);
	while ($row = mysqli_fetch_array($result))
	{
		?>
		<li style="width:100%;" class="clear">
        <div style="background-image:url('<?php echo getimg($row['ID'],$row['post_name']); ?>');width:20%;height:50px;background-size:cover;display:block;float:left;"></div>
        <div style="float:right;width:75%;">
         <h2 style="font-size:16px;line-height:150%;margin:0px;margin-top:-5px;font-weight:700;"><?php echo $row['post_title']; ?></h2>
      <p><?php echo substr(strip_tags($row['post_content']),0,100); ?><a href="../blog/<?php echo $row['post_name']; ?>/" style="margin-top:0px;font-size:12px;padding:5px 10px;line-height:100%;margin-left:10px;">Read More</a></p>
      
        </div>
      
     </li>
		<?php
	}
	?>
     </ul>
  </article>
</section>