<?php
require 'conn.php';

session_start();
session_unset();
session_destroy();
echo "<script>alert('注销成功');</script>";
echo "<script>window.location='index.html';</script>";