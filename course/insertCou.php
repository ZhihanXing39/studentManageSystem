<?php
    //获取前端数据
    $name = $_GET["name"];
    $teacher = $_GET["teacher"];

    include '../utils/database.php';

    //预处理及绑定
    $stmt = $conn->prepare("insert into course (name,teacher)values(?,?)");
    $stmt->bind_param("ss",$name,$teacher);

    //执行
    $stmt->execute();
    //关闭连接
    $stmt->close();
    $conn->close();

    //返回主页
    header("Location:/course/course.php");
?>