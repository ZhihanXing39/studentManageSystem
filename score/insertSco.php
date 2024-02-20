<?php
    //获取前端数据
    $sid = $_GET["sid"];
    $cid = $_GET["cid"];
    $sname = $_GET["sname"];
    $cname = $_GET["cname"];
    $grade = $_GET["grade"];

    //读取配置文件
    $configFile = '../config.json';
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