<?php
    //获取前端数据
    $sid = $_GET["sid"];
    $cid = $_GET["cid"];
    $sname = $_GET["sname"];
    $cname = $_GET["cname"];
    $grade = $_GET["grade"];

    include '../utils/database.php';
    //预处理及绑定
    $stmt = $conn->prepare("insert into score (sid,cid,sname,cname,grade)values(?,?,?,?,?)");
    $stmt->bind_param("iissi",$sid,$cid,$sname,$cname,$grade);

    //执行
    $stmt->execute();
    //关闭连接
    $stmt->close();
    $conn->close();

    //返回主页
    header("Location:/");
?>