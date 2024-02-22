<?php
    include '../utils/database.php';
    
    //查询语句
    $selectAll = "SELECT * FROM `score`";
    $result = $conn->query($selectAll);

    //输出数据
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
            //输出信息到页面
            echo "<table>"
                 . "<tr>"
                 . "<td>" . $row["sid"] . "</td>"
                 . "<td>" . $row["sname"] . "</td>"
                 . "<td>" . $row["cname"] . "</td>"
                 . "<td>" . $row["grade"] . "</td>"
                 . "<td><button class='update' data-sid=".$row["sid"]." data-cid=".$row["cid"].">修改</button></td>"
                 . "<td><button class='delete' data-sid=".$row["sid"]." data-cid=".$row["cid"].">删除</button></td>"
                 . "</tr>"
                 .  "</table>" ;
        }
    }
?>