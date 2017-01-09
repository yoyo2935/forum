<?php
require_once('connect.php');
$sql = "select * from topic";
$rs = mysql_query($sql);
$topic=array();
while($row=mysql_fetch_assoc($rs)){
	$topic[] = $row; 
}
//print_r($topic);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style/public.css" />
<link rel="stylesheet" type="text/css" href="style/list.css" />
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
<!--	<div id="position" class="auto">
		 <a>首页</a> &gt; <a>人生</a>
	</div>
-->
<?php if($_SESSION['check']=='yes') {?>
	<div id="main" class="auto">
		<div id="left">
			<div class="box_wrap">
				<h3>人生</h3>
				<div class="num">
				    今日：<span>7</span>&nbsp;&nbsp;&nbsp;
				    总帖：<span>158061</span>
				</div>
			</div>
			<div style="clear:both;"></div>
			<?php foreach ($topic as $v) { ?>
			<ul class="postsList">
				<li>
					<div class="subject">
						<div class="titleWrap"><h2><a href="show.php?id=<?php echo $v['id'];?>"><?php echo $v['title'];?></a></h2></div>
						<p>
							楼主：<?php echo $v['username']; ?>&nbsp;<?php echo date("Y-m-d h:i:s",$v['ctime']); ?>&nbsp;&nbsp;&nbsp;&nbsp;最后回复：2014-12-08
						</p>
					</div>
					<div class="count">
						<p>
							回复<br /><span>41</span>
						</p>
						<p>
							浏览<br /><span>896</span>
						</p>
					</div>
					<div style="clear:both;"></div>
				</li>
			
			</ul>
			<?php } ?>
			<div class="pages_wrap">
				<a class="btn publish" href="publish.php"></a>
				<div class="pages">
					<a>« 上一页</a>
					<a>1</a>
					<a>2</a>
					<a>3</a>
					<a>4</a>
					<a>5</a>
					<a>下一页 »</a>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="right">
			<div class="classList">
				<div class="title">版块列表</div>
				<ul class="listWrap">
					<li>
						<h2><a href="#">哲学</a></h2>
						<ul>
							<li><h3><a href="#">哲学话题</a></h3></li>
						</ul>
					</li>
					<li>
						<h2><a href="#">化学</a></h2>
					</li>
				</ul>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div id="footer" class="auto">
		<div class="copyright">Powered by Jack ©2017</div>
	</div>
<?php } ?>
</body>
</html>