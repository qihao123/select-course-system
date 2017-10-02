<?php
require_once'conn.php';
//require_once'../3/lib/mysql.func.php';
session_start();
$user = $_SESSION['username'];
echo "欢迎：";
echo $user;
echo "登陆";