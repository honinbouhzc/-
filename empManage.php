<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>
<h1>主界面</h1>
<p>欢迎<?php echo $_GET['name']; ?>，登录成功</p>
<h2><a href="empList.php">管理用户</a></h2>
<h2><a href="#">添加用户</a></h2>
<h2><a href="#">查找用户</a></h2>
<h2><a href="#">安全退出</a></h2>
</body>
</html>