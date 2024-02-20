//这是删除成绩的PHP
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