<?php
    //引用conn.php文件
        require 'conn.php';
        //查询数据表中的数据
         $sql = mysql_query("select * from course");
         $datarow = mysql_num_rows($sql); //长度
            //循环遍历出数据表中的数据
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $id = $sql_arr['id'];
				$Class_Num  = $sql_arr['Class_Num'];
                $Class_Name = $sql_arr['Class_Name'];
                $Class_hour = $sql_arr['Class_hour'];
                $Class_score= $sql_arr['Class_score'];
                $Class_hour_begin = $sql_arr['Class_hour_begin'];
                $Class_hour_end = $sql_arr['Class_hour_end'];
                $room = $sql_arr['room'];
                $teacher_name = $sql_arr['teacher_name'];
                if ($id==0) {
                echo " ";
                }else{
                echo "<table style='text-align:left;' border='1'>
                <tr>
                <th> &nbsp课  程  编  号 </th>
                <th> &nbsp课  程  名  称 </th>
                <th> &nbsp课  程  时  间 </th>
                <th> &nbsp课  程  学  分 </th>
                <th> &nbsp开  始  时  间 </th>
                <th> &nbsp结  束  时  间 </th>
                <th> &nbsp所  在  教  室 </th>
                <th> &nbsp任  课  教  师</th>
                </tr>
                <tr>
                <td>$Class_Num &nbsp &nbsp</td>
                <td>$Class_Name  &nbsp</td>
                <td>$Class_hour  &nbsp</td>
                <td>$Class_score  </td>
                <td>$Class_hour_begin</td>
                <td>$Class_hour_end</td>
                <td>$room</td>
                <td>$teacher_name</td>
                </tr</table>
                ";}}
?>