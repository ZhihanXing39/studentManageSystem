<?php
    //这是验证用户是否登录的php
    if(session_id() == ""){
        session_start();
    }
    //用户未登录则强制返回登录页面
    if(!isset($_SESSION['username'])){
        header("Location:/login.php");
        exit;
    }
?>