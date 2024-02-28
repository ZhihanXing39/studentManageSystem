<?php include "../utils/loginStatus.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加学生</title>
    <script src="../script/addStu.js" async></script>
    <link rel="stylesheet" href="../style/add.css">
</head>
<body>
    <button id="addButton">添加学生</button>
    <div class="container">
        <form action="insertStu.php" method="get" autocomplete="off">
            <label for="name">学生姓名：</label>
            <input type="text" id="name" name="name"><br>
            <label for="gender">学生性别：</label>
            <input type="text" id="gender" name="gender"><br>
            <label for="klass">学生班级：</label>
            <input type="text" id="klass" name="klass"><br>
            <button type="submit">添加</button>
        </form>
    </div>
</body>
</html>