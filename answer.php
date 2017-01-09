<?php
require_once 'connect.php';
if($_GET['action']=='do'){
	$content =  $_POST['content'];
	$time = time();
	$replyname=$_SESSION['user'];
	$cid = $_SESSION['cid'];
	$sql="insert into topic_reply(replyname,content,commentid,ctime)values('$replyname','$content','$cid','$time')";
}

	if(!mysql_query($sql,$link)){
 		 die('Error: ' . mysql_error());
		}
	//echo "1 record added";
	header('Location: reply_list.php');
	mysql_close($link);


?>