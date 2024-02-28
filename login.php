<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    form{
        width: 80rem;
        height: 50rem;
        background-color: wheat;
        margin: 0 auto;
        text-align: center;
        padding: 20rem;
    }
</style>
<link rel="stylesheet" href="style/public.css">
<?php include "header.php"?>
<form action="utils/verifiy.php" method="POST" autocomplete="off">
    <label for="username">用户名：</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">密码：</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">登录</button>
</form>
<?php include "footer.php"?>