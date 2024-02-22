//这是修改课程信息的PHP
<?php
    //获取需要修改的参数
    $id = $_GET["id"];
    $name = $_GET["name"];
    $teacher = $_GET["teacher"];
    
    include '../utils/database.php';

    //预处理及绑定
    $stmt = $conn->prepare("UPDATE course SET `name`=?,teacher=? WHERE id=?");
    $stmt->bind_param("ssi",$name,$teacher,$id);

    //执行
    $stmt->execute();
    //关闭
    $stmt->close();
    $conn->close();
    //返回course.php
    header("Location:course.php");
?>
