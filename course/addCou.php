<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加课程</title>
    <script src="../script/addStu.js" async></script>
    <link rel="stylesheet" href="../style/add.css">
</head>
<body>
    <button id="addButton">添加课程</button>
    <div class="container">
        <form action="insertCou.php" method="get" autocomplete="off">
            <label for="name">课程名称：</label>
            <input type="text" id="name" name="name"><br>
            <label for="teacher">教授老师：</label>
            <input type="text" name="teacher">
            <button type="submit">添加</button>
        </form>
    </div>
</body>
</html>