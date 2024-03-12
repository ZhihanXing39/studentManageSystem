<?php
    include '../utils/database.php';
    // 获取总记录数（假设从数据库查询得到）
    $totalRecordQuery = mysqli_query($conn,"SELECT COUNT(*) AS total_records FROM student");
    include '../utils/countPage.php';
    // 从数据源中获取当前页的记录（假设使用数据库查询）
    $sql = "SELECT * FROM student LIMIT $startIndex, $pageSize";
    $result = mysqli_query($conn, $sql);

    //输出数据
    if($result->num_rows > 0){
        echo "<table>";
        while($row = $result->fetch_assoc()){
            //输出信息到页面
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["klass"] . "</td>";
            echo "<td><button id=". $row["id"] ." class='update'>修改</button></td>";
            echo "<td><button id=". $row["id"] ." class='delete'>删除</button></td>";
            echo "</tr>";
        }
        echo  "</table>" ;
    }
    include '../utils/page.php';
?>