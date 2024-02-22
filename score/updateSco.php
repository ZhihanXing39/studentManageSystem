//这是修改成绩的PHP
<?php
    //获取需要修改的参数
    $sid = $_GET["sid"];
    $cid = $_GET["cid"];
    $grade = $_GET["grade"];
    
    include '../utils/database.php';

    //预处理及绑定
    $stmt = $conn->prepare("UPDATE score SET `grade`=? WHERE sid=? AND cid=?");
    $stmt->bind_param("iii",$grade,$sid,$cid);

    //执行
    $stmt->execute();
    //关闭
    $stmt->close();
    $conn->close();
    //返回score.php
    header("Location:score.php");
?>
