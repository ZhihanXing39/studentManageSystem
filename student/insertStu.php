<?php
    //获取前端数据
    $name = $_GET["name"];
    $gender = $_GET["gender"];
    $klass = $_GET["klass"];

    include '../utils/database.php';

    //预处理及绑定
    $stmt = $conn->prepare("insert into student (name,gender,klass)values(?,?,?)");
    $stmt->bind_param("sss",$name,$gender,$klass);

    //执行
    $stmt->execute();
    //关闭连接
    $stmt->close();
    $conn->close();

    //返回主页
    header("Location:/");
?>