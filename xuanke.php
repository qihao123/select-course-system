<?php
//require_once'admin.inc.php';
require_once'conn.php';
//require_once'../3/lib/mysql.func.php';
session_start();
$user = $_SESSION['username'];
$password=$_POST['coursenumber'];

$sql = mysql_query("select * from course where Class_Num = $password");
$datarow = mysql_num_rows($sql); //长度
if($datarow){
            //循环遍历出数据表中的数据
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $C_hour = $sql_arr['Class_hour'];
				$C_hour_begin  = $sql_arr['Class_hour_begin'];
                $C_hour_end = $sql_arr['Class_hour_end'];
                $c_name = $sql_arr['Class_Name'];
                $t_name = $sql_arr['teacher_name'];
                $room = $sql_arr['room'];
                $Class_score = $sql_arr['Class_score'];
                $c_num = $sql_arr['id'];}

    $sql2 = mysql_query("select * from sc where c_num = $password and s_num = $user ");
    if(mysql_num_rows($sql2)==0){
        $sql1 = "INSERT  INTO `sc` (s_num,t_num,c_name,C_score,C_hour_begin,C_hour_end,C_hour,room,c_num
        ) VALUES ('$user','$t_name','$c_name','$Class_score','$C_hour_begin','$C_hour_end','$C_hour','$room','$c_num')";
        $data = mysql_query($sql1);
        if($data){
            header("Location: http://127.0.0.1/work/3/xuesheng.html");
            }else{
	        echo "<script>alert('选课失败');</script>";
            echo "<script>window.location='xuesheng.html';</script>";
            }
    }else{
    echo "<script>alert('不能重复选课');</script>";
    echo "<script>window.location='xuesheng.html';</script>";
         }

}else{
	echo "<script>alert('请输入正确的课程编号');</script>";
    echo "<script>window.location='xuesheng.html';</script>";
}




//echo $C_hour;
//{
//echo "ok";
//}else {
//	echo "no";
//}