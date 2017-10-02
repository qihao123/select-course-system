<?php
session_start(1);
$user = 2;
$_SESSION['logined']=1;   //判断是否已经登录的依据。
$_SESSION['user']=$user; 
echo "chenggong";
?>