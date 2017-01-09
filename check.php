<?php
	session_start();
	require_once('connect.php');
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "select * from user where name = '$uname'";
	$rs = mysql_query($sql);
	$row = mysql_fetch_assoc($rs);
	if(!$row){
		echo '用户名错误';
	}else{
		if(md5($pass)===$row['password']){
			$_SESSION['user']=$row['name'];
			$_SESSION['check'] = 'yes';
			//$_SESSION['password']=$row['password'];
			header('Location: publish.php');
		}else{
			echo '密码错误';
		}
	}
	

?>