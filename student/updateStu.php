//这是修改学生信息的PHP
<?php
    //获取需要修改的参数
    $id = $_GET["id"];
    $name = $_GET["name"];
    $gender = $_GET["gender"];
    $klass = $_GET["klass"];

    include '../utils/database.php';


    //预处理及绑定
    $stmt = $conn->prepare("UPDATE student SET `name`=?,gender=?,klass=? WHERE id=?");
    $stmt->bind_param("sssi",$name,$gender,$klass,$id);

    //执行
    $stmt->execute();
    //关闭
    $stmt->close();
    $conn->close();
    //返回student.php
    header("Location:student.php");
?>
