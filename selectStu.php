<?php
    //读取配置文件
    $configFile = 'config.json';
    $configMsg = file_get_contents($configFile);
    //解析为数组
    $config = json_decode($configMsg,true);

    //连接数据库参数
    $servername = $config['host'];
    $username = $config['username'];
    $password = $config['password'];
    $database = $config['database'];

    //创建连接
    $conn = new mysqli($servername, $username, $password, $database);
    //检测连接
    if($conn->connect_error){
        die("连接失败" . $conn->connect_error);
    }
    //echo "连接成功！";
    //查询语句
    $selectAll = "SELECT * FROM `student`";
    $result = $conn->query($selectAll);

    //输出数据
    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
            //输出信息到页面
            echo "<table>"
                 . "<tr>"
                 . "<td>" . $row["id"] . "</td>"
                 . "<td>" . $row["name"] . "</td>"
                 . "<td>" . $row["gender"] . "</td>"
                 . "<td>" . $row["klass"] . "</td>"
                 . "<td><button id=". $row["id"] ." class='update'>修改</button></td>"
                 . "<td><button id=". $row["id"] ." class='delete'>删除</button></td>"
                 . "</tr>"
                 .  "</table>" ;
        }
    }
?>