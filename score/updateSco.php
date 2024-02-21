//这是修改成绩的PHP
<?php
    //获取需要修改的参数
    $sid = $_GET["sid"];
    $cid = $_GET["cid"];
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
