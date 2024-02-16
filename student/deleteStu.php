//这是删除学生信息的PHP
<?php
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

    //获取要删除信息的id
    $id = $_GET["q"];
    //预处理及绑定
    $stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
    $stmt->bind_param("i",$id);

    //执行
    $stmt->execute();

    //关闭
    $stmt->close();
    $conn->close();
?>