<?php
 require 'conn.php';
 session_start();
 $class_num = $_POST['class_num'];
 $class_name = $_POST['class_name'];
 $class_hour = $_POST['class_hour'];
 $class_hour_begin = $_POST['class_hour_begin'];
 $class_hour_end = $_POST['class_hour_end'];
 $class_score = $_POST['class_score'];
 $room = $_POST['room'];
 $user = $_SESSION['username'];
 $id = $class_num;

 $sql = "insert into course (Class_hour,Class_hour_begin,Class_hour_end,Class_Name,Class_Num,Class_score,room,id,teacher_name) values('$class_hour','$class_hour_begin','$class_hour_end','$class_name','$class_num','$class_score','$room','$id','$user')";

 $data = mysql_query($sql);
 if($data){
 	echo "<script>alert('添加成功');</script>";
echo "<script>window.location='jiaoshi.html';</script>";
 }else{
 	echo "<script>alert('添加失败');</script>";
echo "<script>window.location='jiaoshi.html';</script>";
 }
 