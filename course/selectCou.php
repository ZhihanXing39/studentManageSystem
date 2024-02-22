<?php
    include '../utils/database.php';
    
    //查询语句
    $selectAll = "SELECT * FROM `course`";
    $result = $conn->query($selectAll);

    //输出数据
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
            //输出信息到页面
            echo "<table>"
                 . "<tr>"
                 . "<td>" . $row["id"] . "</td>"
                 . "<td>" . $row["name"] . "</td>"
                 . "<td>" . $row["teacher"] . "</td>"
                 . "<td><button id=". $row["id"] ." class='update'>修改</button></td>"
                 . "<td><button id=". $row["id"] ." class='delete'>删除</button></td>"
                 . "</tr>"
                 .  "</table>" ;
        }
    }
?>