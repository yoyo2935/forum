<?php
require_once('connect.php');
if($_GET['action']=='do'){
	$content =  $_POST['content'];
	$uname = $_SESSION['user'];
	$ctime=time();
	//echo $content;
	//echo $_SESSION['number'];exit();
	$sql="insert into topic_comment(uname,content,topicid,ctime)values('$uname','$content','$_SESSION[number]','$ctime')";
	if(!mysql_query($sql,$link)){
 		 die('Error: ' . mysql_error());
		}
	//echo "1 record added";
	header('Location:topic_list.php');
	mysql_close($link);
}