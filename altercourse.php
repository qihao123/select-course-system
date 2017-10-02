<?php
 require 'conn.php';
 session_start();
 //$user = $_SESSION['$username'];
 $class_num = $_POST['altercourse'];

 $sql = mysql_query("delete from course where Class_Num = $class_num");
 $sql1 = mysql_query("delete from sc where c_num = $class_num");
 if ($sql) {
 	echo "<script>alert('删除成功');</script>";
echo "<script>window.location='jiaoshi.html';</script>";
 }else{
 	echo "<script>alert('删除失败');</script>";
echo "<script>window.location='jiaoshi.html';</script>";
 }
 //echo $class_num;