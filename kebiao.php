<?php
    //引用conn.php文件
        require 'conn.php';
        session_start();
        $user = $_SESSION['username'];
        //查询数据表中的数据
         $sql = mysql_query("select * from sc where s_num = $user");
         $datarow = mysql_num_rows($sql); //长度
            //循环遍历出数据表中的数据
            for($i=0;$i<$datarow;$i++){
                $sql_arr = mysql_fetch_assoc($sql);
                $C_hour = $sql_arr['C_hour'];
				$C_hour_begin  = $sql_arr['C_hour_begin'];
                $C_hour_end = $sql_arr['C_hour_end'];
                $c_name = $sql_arr['c_name'];
                $t_name = $sql_arr['t_num'];
                $room = $sql_arr['room'];
                echo "<table style='text-align:left;' border='1'>
                <tr>
                <th>课 程 名</th>
                <th>教 师 名</th>
                <th>教 室</th>
                <th>起 始 时 间</th>
                <th>终 止 时 间</th>
                <th>周 数</th>
                </tr>
                <tr>
                <td>$c_name</td>
                <td>$t_name</td>
                <td>$room</td>
                <td>$C_hour_begin</td>
                <td>$C_hour_end</td>
                <td>$C_hour</td>
                </tr</table>
                ";}
?>