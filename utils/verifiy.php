<?php
    //这是验证用户登录信息的php
    //连接数据库
    include "database.php";

    //获取前端数据
    $username = $_POST['username'];
    $password = $_POST['password'];

    //获取数据进行验证
    $selectAll = "SELECT * FROM `user`";
    $result = $conn->query($selectAll);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($username === $row['username']){
                if($password === $row['password']){
                    header("Location:/index.php");
                }else{
                    echo "密码错误！";
                }
            }else{
                echo "用户不存在！";
            }
        }
    }
?>