<?php
	session_start();
	error_reporting(0);
	include("DBConnection.php");
	define('DIR_UPLOADING_CATAGORIES','assets/catagories/');
	
	define('DIR_UPLOADING_USERS','assets/users/');
	
	define('DIR_UPLOADING_SLIDER','assets/slider/');
	
	define('DIR_UPLOADING_BANNER','assets/banner/');
	
	define('DIR_UPLOADING_ABOUT','assets/about/');
	
	define('DIR_UPLOADING_BLOGS','assets/blogs/');
	
	define('DIR_UPLOADING_PRODUCTS','assets/products/');
	
	define('DIR_UPLOADING_BRAND','assets/brand/');
	
	define("INDENT","&nbsp;&nbsp;&nbsp;");
	
	
	$type = array("Text","RadioButton","Checkbox");
	
	
	function redirect($url)
	{
		header('Location:'.$url);
		exit();
	}
	function get_catagoryname($CatIDs)
	{
		$query = "SELECT CategoryName from catagories where ID IN (".$CatIDs.")";
		$res = mysql_query($query) or die(mysql_error());
		while(mysql_fetch_array($res))
		{
			$CatNames = $rows['CategoryName'];
		}
		$CatNames = implode(",",$CatNames);
		return $CatNames;
	}
	$self =  $_SERVER['PHP_SELF'];
	
	

?>
