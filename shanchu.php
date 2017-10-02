<?php
//require_once'admin.inc.php';
require_once'conn.php';
//require_once'../3/lib/mysql.func.php';
session_start();
$user = $_SESSION['username'];
$delete=$_POST['delete'];

$sql = "DELETE FROM sc WHERE c_name= '$delete' AND s_num = '$user'";
$data = mysql_query($sql);
if($data){
echo "<script>alert('删除成功');</script>";
echo "<script>window.location='xuesheng.html';</script>";
}else{
   echo "<script>alert('删除失败');</script>";
   echo "<script>window.location='xuesheng.html';</script>";
}