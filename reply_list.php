<?php
require_once 'connect.php';
$sql = "select * from topic_reply";
$rs=mysql_query($sql);
$reply=array();
while($row = mysql_fetch_assoc($rs)){
	$reply[]=$row;
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
<link rel="stylesheet" type="text/css" href="style/show.css" />
</head>
<body>
	<div style="margin-top:55px;"></div>
	<div id="main" class="auto">
	<?php foreach($reply as $r) { ?>
		<div class="wrapContent">
			<div class="left">
				<div class="face">
					<a target="_blank" href="">
						<img src="style/2374101_middle.jpg" />
					</a>
				</div>
				<div class="name">
					<a href=""><?php echo $r['replyname']; ?></a>
				</div>
			</div>
			<div class="right">
				<div class="pubdate">
					<span class="date">发布于：<?php echo date('Y-m-d H:i:s',$r['ctime'])?> </span>
				</div>
				<div class="content">
					 <?php echo $r['content']; ?>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
	<?php } ?>
		<div class="wrap1">
			<div class="pages">
				<a>« 上一页</a>
				<a>1</a>
				<span>2</span>
				<a>3</a>
				<a>4</a>
				<a>...13</a>
				<a>下一页 »</a>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
</body>
</html>