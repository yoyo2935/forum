<?php 
//连接数据库
session_start();
//echo $_SESSION['user'];
require_once('connect.php');

$sql = "select * from category";
$rs = mysql_query($sql);
$category = array();
while($row = mysql_fetch_assoc($rs)) {
	$category[] = $row;
	//print_r($category);
}
//require('publish.php');

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>创客星球</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style/public.css?ver=113" />
<link rel="stylesheet" type="text/css" href="style/publish.css?ver=113" />
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
	<div style="margin-top:53px;"></div>

	<?php if($_SESSION['check']=='yes') {?>
	<div id="publish">
		<form method="post" action="topic.php?action=write">
			<select name="cat_id">
                <?php foreach($category as $c) {?>
                   <option value="<?php echo $c['catname'];?>"><?php echo $c['catname'];?></option>
                <?php }?>
            </select>
			<input class="title" placeholder="请输入标题" name="title" type="text" />
			<textarea name="content" class="content"></textarea>
			<input class="publish" type="submit" name="submit" value="" />
			<div style="clear:both;"></div>
		</form>
	</div>
	<div id="footer" class="auto">
		<div class="copyright">Powered by Jack ©2017</div>
	</div>
	<?php } ?>
</body>
</html>