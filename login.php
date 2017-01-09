<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="style/public.css" />
<link rel="stylesheet" type="text/css" href="style/register.css" />
</head>
<body>
	<div class="header_wrap">
		<div id="header" class="auto">
			<div class="nav">
				<a class="hover">首页</a>
				<a>新帖</a>
				<a>话题</a>
			</div>
		</div>
	</div>
	<div style="margin-top:55px;"></div>
	<div id="register" class="auto">
		<form action="check.php" method="post">
			<label>用户名：<input type="text"  name="username" /><span>*用户名含有禁用字符，请选择其他用户名</span></label>
			<label>密码：<input type="password"  name="password" /><span>*用户名含有禁用字符，请选择其他用户名</span></label>
			
			<div style="clear:both;"></div>
			<input class="btn" type="submit" value="点击登录" />
		</form>
	</div>
	<div id="footer" class="auto">
		<div class="copyright">Powered by Jack ©2017</div>
	</div>
</body>
</html>