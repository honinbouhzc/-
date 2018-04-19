<?php 

//接收用户的登录数据
//接收用户名
$username = $_POST['admin_name'];
//接收密码
$password = $_POST['admin_password'];

//简单验证
if ($username == 'admin' && $password == 123456) {
	//合法用户，跳转到empMain.php
	//$name = $username;
	header("Location:empManage.php?name=$username");
	//如果要跳转，则最好带上exit（），这样会加速当前进程的结束，提高访问效率
	exit();
}else{
	//非法用户 ，回到原来页面
	header('Location:login.php?errno=1');
	exit();
} 

/*
//到数据库去验证->mysqli
$mysqli = new Mysqli('localhost','root','','hsp');
if ($mysqli->connect_error) {
	die('连接失败'.$mysqli->error);
}
$mysqli->query('set names utf8');

//防止sql注入攻击，需要改变验证逻辑

$sql = 'select password,name from admin where name = $username';

//1 通过输入的name来获取密码，然后在和输入的密码比对
$res = $mysqli->query($sql);
if ($row = $res->ftech_assoc()) {
	// 2 当查询到数据时，取出数据库里面的密码
	if ($row['password'] == md5($password)) {
		//说明合法
		//取出用户名
		$name = $row['name'];
		header('Location:empManage.php');
		exit();
	}
}	
	header('Location:login.php?errno=1');
	exit();

	$mysqli->free($res);
	$mysqli->close();
*/	

?>