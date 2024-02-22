//这是删除课程信息的PHP
<?php
    include '../utils/database.php';

    //获取要删除信息的id
    $id = $_GET["q"];
    //预处理及绑定
    $stmt = $conn->prepare("DELETE FROM course WHERE id = ?");
    $stmt->bind_param("i",$id);

    //执行
    $stmt->execute();

    //关闭
    $stmt->close();
    $conn->close();
?>