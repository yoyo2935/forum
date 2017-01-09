<?php 
//连接数据库
require_once('connect.php');
$_SESSION['number']=$id =  $_GET['id'];
if($_GET['id']==''){
	header('Location:topic_list.php');
}
$sql = "select * from topic where id = '$id'";
$rs = mysql_query($sql);
$article = array();
while($row = mysql_fetch_assoc($rs)) {
	$article[] = $row;
	
}

//echo $_SESSION['user'];exit();
//print_r($article);

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style/public.css" />
<link rel="stylesheet" type="text/css" href="style/show.css" />
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
	<?php if($_SESSION['check']=='yes') {?>
	<!--<div id="position" class="auto">
		 <a>首页</a> &gt; <a>人生</a> &gt;高见
	</div>-->
	<div id="main" class="auto">
	<?php foreach($article as $v) { ?>
		<div class="wrapContent" style="margin-top:10px">
			<div class="left">
				<div class="face">
					<a target="_blank" href="">
						<img src="style/2374101_middle.jpg" />
					</a>
				</div>
				<div class="name">
					<a href=""><?php echo $v['username'] ?></a>
				</div>
			</div>
			<div class="right">
				<div class="title">
					<h2><?php echo $v['title'] ?></h2>
					<span>阅读：339&nbsp;|&nbsp;回复：15</span>
					<div style="clear:both;"></div>
				</div>
				<div class="pubdate">
					<span class="date">发布于：<?php echo date("Y-m-d h:i:s",$v['ctime']); ?></span>
					<span class="floor" style="color:red;font-size:14px;font-weight:bold;">楼主</span>
				</div>
				<div class="content">
					 <?php echo $v['content'] ?>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
	<?php } ?>
	<?php 
		//连接数据库
		require_once('connect.php');
		$id =  $_SESSION['number'];
		if($_GET['id']==''){
			header('Location:topic_list.php');
		}
		$sql = "select * from topic_comment where topicid = '$id'";
		$rs = mysql_query($sql);
		$comments = array();
			while($row = mysql_fetch_assoc($rs)) {
		$comments[] = $row;
		}

	?>
	<?php foreach($comments as $v) { ?>
		<div class="wrapContent">
			<div class="left">
				<div class="face">
					<a target="_blank" href="">
						<img src="style/2374101_middle.jpg" />
					</a>
				</div>
				<div class="name">
					<a href=""><?php echo $v['uname']; ?></a>
				</div>
			</div>
			<div class="right">
				
				<div class="pubdate">
					<span class="date">回复时间：<?php echo date('Y-m-d H:i:s',$v['ctime']); ?></span>
					<span class="floor"><a href="reply_list.php">查看对话</a>|<a href="quote.php?cid=<?php echo $v['cid']; ?>">回复</a></span>
				</div>
				<div class="content">
					<?php echo $v['content']; ?>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
	<?php } ?>
		<div class="wrap1">
			<div class="pages">
				<a>« 上一页</a>
				<a>1</a>
				<a>2</a>
				<a>3</a>
				<a>4</a>
				<a>...13</a>
				<a>下一页 »</a>
			</div>
			<a class="btn reply" href="reply.php"></a>
			<div style="clear:both;"></div>
		</div>
	</div>
	<div id="footer" class="auto">
		<div class="copyright">Powered by Jack ©2017</div>
	</div>
	<?php } ?>
</body>
</html>