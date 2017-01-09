<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title>后台界面</title>
<meta name="keywords" content="后台界面" />
<meta name="description" content="后台界面" />
<link rel="stylesheet" type="text/css" href="style/admin.css" />
</head>
<body>
	<div id="top">
		<div class="logo">
			管理中心
		</div>
		<div class="login_info">
			<a href="#" style="color:#fff;">网站首页</a>&nbsp;|&nbsp;
			管理员： admin <a href="#">[注销]</a>
		</div>
	</div>
	<div id="sidebar">
		<ul>
			<li>
				<div class="small_title">系统</div>
				<ul class="child">
					<li><a class="current" href="#">系统信息</a></li>
					<li><a href="#">管理员</a></li>
					<li><a href="#">添加管理员</a></li>
					<li><a href="#">站点设置</a></li>
				</ul>
			</li>
			<li><!--  class="current" -->
				<div class="small_title">内容管理</div>
				<ul class="child">
					<li><a class="current" href="#">版块列表</a></li>
					<li><a href="">添加版块</a></li>
					<li><a href="">帖子管理</a></li>
				</ul>
			</li>
			<li>
				<div class="small_title">用户管理</div>
				<ul class="child">
					<li><a href="#">用户列表</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="main" style="height:1000px;">
	  <form method="post" action="category.php?action=add">	
		<table class="au">
			<tr>
				<td style="padding-right:20px;">版块名称</td>
				<td><input type="text" name="category" /></td>
			</tr>
			<tr>
				<td colspan="2"><input id="ok" type="submit" name="submit" value="提交" /></td>
			</tr>
		</table>
	  </form>
	</div>
</body>
</html>