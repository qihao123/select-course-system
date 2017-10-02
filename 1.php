<?php
session_start();
$user = 2;
$_SESSION['logined']=1;   //判断是否已经登录的依据。
$_SESSION['user']=$user; 
?>