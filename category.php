<?php
require_once('connect.php');
if($_GET['action']=='add'){
	//echo $_POST['category'];
	$sql="INSERT INTO category (catname) VALUES ('$_POST[category]')";
	if(!mysql_query($sql,$link)){
 		 die('Error: ' . mysql_error());
		}
	header('Location: admin.php');
	mysql_close($link);
}