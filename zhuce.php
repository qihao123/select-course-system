<?php
 require 'conn.php';
 session_start();
 $user = $_POST['username'];
 $name = $_POST['name'];
 $pass = $_POST['pass'];
 $mail = $_POST['youxiang'];
 $major = $_POST['major'];
 $sql = mysql_query("insert into xuanke_admin (id,name,major,password,youxiang) values('$user','$name','$major','$pass','$mail')");
 if ($sql) {
 	echo "<script>alert('注册成功');</script>";
echo "<script>window.location='zhuce.html';</script>";
 }else{
 	echo "<script>alert('注册失败');</script>";
echo "<script>window.location='zhuce.html';</script>";
 }
 