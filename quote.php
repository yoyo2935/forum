<?php
require_once'connect.php';
$_SESSION['cid'] = $cid = $_GET['cid'];
$sql = "select * from topic_comment where cid = '$cid'";
$rs = mysql_query($sql);
$comment = array();
while($row=mysql_fetch_assoc($rs)){
	$comment[] = $row; 
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
	<?php foreach($comment as $c){ ?> 
		<div class="quote">
			<p id="js-quote" data-id="<?php echo $c['cid']; ?>" class="title">引用<?php echo $c['uname']; ?> 发表的: </p>
			<span id="js-comment"><?php echo $c['content']; ?></span>
		</div>
	<?php } ?>
		<form method="post" action="answer.php?action=do">
			<textarea name="content" class="content"></textarea>
			<input class="reply" type="submit" id="submit" name="submit" value="" />
			<div style="clear:both;"></div>
		</form>
	</div>
	<div id="footer" class="auto">
		<div class="copyright">Powered by Jack ©2017</div>
	</div>
</body>
</html>