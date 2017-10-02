<?php
//require_once'admin.inc.php';
require_once'conn.php';
//require_once'../3/lib/mysql.func.php';
session_start();
$username=$_POST['username'];
$password=$_POST['pass'];
$verify=$_POST['yanzhengma'];
$verify1=$_SESSION['verify'];
$_SESSION['username'] = $username;
if ($verify==$verify1) {
	$sql = "select *from xuanke_admin where id='{$username}' and password='{$password}'";
	$sql1 = mysql_query($sql);
	$data = mysql_num_rows($sql1);
	$sql2 = "select * from teacher_admin where id = '{$username}' and password = '{$password}'";
	$sql3 =  mysql_query($sql2);
	$data2 = mysql_num_rows($sql3);
	//$res=fetchOne($sql);
	//print_r($res);
	//print_r($username);
	//print_r($password);
	//print_r($verify);
	//print_r($data)；
	# code...
//}else{
//	echo "<script>alert('验证码错误');</script>";
//	echo "<script>window.location='index.html';</script>";
//}
if ($data) {
	# code...
	echo "欢迎同学：".$username;
header("Location: http://127.0.0.1/work/3/xuesheng.html");
}
if ($data2) {
	echo "欢迎老师".$username;
	header("Location: http://127.0.0.1/work/3/jiaoshi.html");
	}
if (!$data && !$data2) {
        echo "<script>alert('用户名或密码错误请重试');</script>";
        echo "<script>window.location='index.html';</script>";
}
}
else{
	session_destroy();
	//session_unregister();
	echo "<script>alert('验证码错误');</script>";
	echo "<script>window.location='index.html';</script>";
}