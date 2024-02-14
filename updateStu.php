//这是修改学生信息的PHP
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

    //获取需要修改的参数
    $id = $_GET["id"];
    $name = $_GET["name"];
    $gender = $_GET["gender"];
    $klass = $_GET["klass"];

    //预处理及绑定
    $stmt = $conn->prepare("UPDATE student SET `name`=?,gender=?,klass=? WHERE id=?");
    $stmt->bind_param("sssi",$name,$gender,$klass,$id);

    //执行
    $stmi->execute();
    //关闭
    $stmt->close();
    $conn->close();
?>