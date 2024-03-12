<?php
    include '../utils/database.php';
    
    // 获取总记录数（假设从数据库查询得到）
    $totalRecordQuery = mysqli_query($conn,"SELECT COUNT(*) AS total_records FROM score");
    include '../utils/countPage.php';
    // 从数据源中获取当前页的记录（假设使用数据库查询）
    $sql = "SELECT * FROM score LIMIT $startIndex, $pageSize";
    $result = mysqli_query($conn, $sql);

    //输出数据
    if($result->num_rows > 0){
        echo "<table>";
        while($row = $result->fetch_assoc()){
            //输出信息到页面
            echo "<tr>";
            echo "<td>" . $row["sid"] . "</td>";
            echo "<td>" . $row["sname"] . "</td>";
            echo "<td>" . $row["cname"] . "</td>";
            echo "<td>" . $row["grade"] . "</td>";
            echo "<td><button class='update' data-sid=".$row["sid"]." data-cid=".$row["cid"].">修改</button></td>";
            echo "<td><button class='delete' data-sid=".$row["sid"]." data-cid=".$row["cid"].">删除</button></td>";
            echo "</tr>";
        }
        echo  "</table>" ;
    }
    include '../utils/page.php';
?>