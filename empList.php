<!DOCTYPE html>
<html>
<head>
	<title>雇员信息列表</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>雇员信息列表</h1>
<?php 
	$mysqli = new Mysqli('localhost','root','','hsp');
		if ($mysqli->connect_error) {
		die('连接失败'.$mysqli->error);
		}
	$mysqli->query('set names utf8');
	$sql = "select * from emp";
	$res = $mysqli->query($sql);
	echo "<table width='700px' border='1px'>";
	echo "<tr><th>id</th><th>name</th><th>grade</th><th>email</th><th>salary</th><th>删除用户</th><th>修改用户</th></tr>";
	//这里我们需要循环的显示用户的信息
	while ($row = $res->fetch_assoc()) {
		echo "<tr><td>$row['id']</td><td>$row['name']</td><td>$row['salary']</td><td>$row['email']</td><td>$row['salary']</td><td href='#'>删除</td><td href=''>修改</td></tr>";
	}
	echo "</table>";
	$mysqli->free($res);
	$mysqli->close();
?>
</body>
</html>