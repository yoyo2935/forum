<?php
date_default_timezone_set("Asia/Shanghai");
require_once("connect.php");
session_start();

	//发表文章
$action=$_GET['action'];
if($action=='write'){
	$ctime = time();
	$username=$_SESSION['user'];
	$sql="INSERT INTO topic(catname,title,content,username,ctime) VALUES('$_POST[cat_id]','$_POST[title]','$_POST[content]','$username','$ctime')";
	if(!mysql_query($sql,$link)){
		die('Error: '.mysql_error());
	}
	header("Location:show.php");
	mysql_close($link);


}
