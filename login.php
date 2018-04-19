<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>登录页面</h1>
	<form action="loginProcess.php" method="post">
	用户名：<input type="text" name="admin_name"><br>
	密  码：<input type="password" name="admin_password"><br>
	是否保存cookie<input type="checkbox" name="cook"><br>
	<input type="submit" value="登录" name="sub">
	<input type="reset" value="重新填写">
	</form>
	<?php 
		//接收errno
		if (isset( $_GET['errno'])) {
			$errno = $_GET['errno'];
			if ($errno == 1) {
				echo "<br><font color='red' size=3>用户名或者密码输入错误！</font>";
			}
		}
	?>
</body>
</html>