<?php
error_reporting(-1);
date_default_timezone_set('Asia/Calcutta');
define("HOST", "localhost");
define("USER", "tseriess_user");
define("PASSWORD", "c?4OcGC{2xQ]");
define("DATABASE", "tseriess_database");
function menu($menu_name,$page)
{
	if($menu_name==$page)
	{
		echo "class=active";
	}
}
function connect()
{
	static $mysqli;
	$mysqli=new mysqli(HOST, USER, PASSWORD, DATABASE);
	return $mysqli;
}
function disconnect($mysqli)
{
	mysqli_close($mysqli);
}
function getvalue($id,$value)
{
	$table="wp_postmeta";
	$fields="meta_value";
	$mysqli=connect();
	$sql="select ".$fields." from `".$table."` where post_id='".$id."' and `meta_key`='".$value."'";
	$query=mysqli_query($mysqli,$sql);
	$result=mysqli_fetch_array($query);
	disconnect($mysqli);
	return $result[0];
}
function get_array($id, $meta_key)
{
	$value=array();
	$a=getvalue($id,"_".$meta_key."-sort-order");
	$mysqli=connect();
	$a=unserialize($a);
	foreach($a as $as)
	{
		$sql="select meta_value from `wp_postmeta` where meta_id='".$as."'";
		$res=mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_array($res))
		{
			array_push($value, $row['meta_value']);
		}
	}
	disconnect($mysqli);
	return $value;
}
?>
