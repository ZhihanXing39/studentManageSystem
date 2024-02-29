<?php  
    // 这是登出的php
    session_start();  
    if ($_POST['logout']) {  
        if (isset($_SESSION['username'])) {  
            session_destroy();  
            // 设置会话 cookie 的过期时间为当前时间之前  
            setcookie(session_name(), '', time() - 3600, '/');
            echo "登出成功！";  
        }  
        // 重定向到登录页面或其他适当的页面  
        header('Location: /login.php');  
        exit; // 确保后续代码不会被执行  
    }  
?>