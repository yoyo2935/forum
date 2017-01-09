<?php
require_once('connect.php');
$id =  $_SESSION['number'];
$sql="select * from topic where id='$id'";
$rs=mysql_query($sql);
$topic=array();
while($row=mysql_fetch_assoc($rs)){
	$topic[] = $row; 
}




?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style/public.css" />
<link rel="stylesheet" type="text/css" href="style/publish.css" />
</head>
<body>
	<div class="header_wrap">
		<div id="header" class="auto">
			<div class="nav">
				<a class="hover">首页</a>
			</div>
			<div class="login">
			<?php if($_SESSION['check']=='yes') {?><a href="logout.php">注销登录</a>
			<?php }else{ echo "<a href='login.php'>登录</a>"; } ?>
			</div>
		</div>
	</div>
	<div style="margin-top:55px;"></div>

	<div id="publish">
	<?php foreach($topic as $v){ ?>
		<div>回复：由 <?php echo $v['username'] ?> 发布的《<?php echo $v['title'];?>》</div>
	<?php } ?>
		<form method="post" action="comment.php?action=do">
			<textarea name="content" class="content"></textarea>
			<input class="reply" type="submit" name="reply" value="" />
			<div style="clear:both;"></div>
		</form>
	</div>
	<div id="footer" class="auto">
		<div class="copyright">Powered by Jack ©2017</div>
	</div>
</body>
</html>