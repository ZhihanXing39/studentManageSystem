<?php include "../utils/loginStatus.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加成绩</title>
    <script src="../script/addStu.js" async></script>
    <link rel="stylesheet" href="../style/add.css">
</head>
<body>
    <button id="addButton">添加成绩</button>
    <div class="container">
        <form action="insertSco.php" method="get" autocomplete="off">
            <label for="sid">学生序号：</label>
            <input type="text" id="sid" name="sid"><br>
            <label for="cid">课程序号：</label>
            <input type="text" id="cid" name="cid"><br>
            <label for="sname">学生姓名：</label>
            <input type="text" id="sname" name="sname"><br>
            <label for="cname">课程名称：</label>
            <input type="text" id="cname" name="cname"><br>
            <label for="grade">成绩：</label>
            <input type="text" id="grade" name="grade"><br>
            <button type="submit">添加</button>
        </form>
    </div>
</body>
</html>