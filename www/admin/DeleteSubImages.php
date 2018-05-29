<?php
include("Common.php");
include("CheckAdminLogin.php");
if(isset($_REQUEST['ProductID']) && isset($_REQUEST['SubImage']))
{
$ID=$_REQUEST['ProductID'];
$SubImage=$_REQUEST['SubImage'];

$sql = "SELECT SubImages FROM products WHERE ID=".$ID;
$res = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($res);
$arrayofimage = array();
array_push($arrayofimage,$SubImage);
$result=array_diff(explode(",",$row['SubImages']),$arrayofimage);
$Image=implode(",",$result);

$sql = "UPDATE products SET SubImages='".$Image."' where ID=".$ID;
if(mysql_query($sql) or die(mysql_error()))
{
	unlink(DIR_UPLOADING_PRODUCTS.$SubImage);
}
$_SESSION['msg'] ='<div class="callout callout-success">
                <p>SubImage has been deleted</p>
              </div>';	
redirect('EditProduct.php?ProductID='.$ID);
}
?>