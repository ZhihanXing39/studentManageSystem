//这是删除成绩的PHP
<?php
    include '../utils/database.php';

    //获取要删除信息的id
    $sid = $_GET["sid"];
    $cid = $_GET["cid"];
    //预处理及绑定
    $stmt = $conn->prepare("DELETE FROM score WHERE sid = ? and cid =?");
    $stmt->bind_param("ii",$sid,$cid);

    //执行
    $stmt->execute();

    //关闭
    $stmt->close();
    $conn->close();
?>