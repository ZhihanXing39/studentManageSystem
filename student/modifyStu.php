<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改学生信息</title>
    <style>
        .modifyStu{
            width: 80rem;
            height: 40rem;
            border: .1rem solid;
            background-color: #3399ff;
            /* 布局信息 */
            display: none;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div>
    <div class="modifyStu">
        <form action="updateStu.php" method="get" autocomplete="off">
            <label for="id">学生序号：</label>
            <input type="text" id="id" name="id" readonly><br>
            <label for="name">学生姓名：</label>
            <input type="text" id="name" name="name"><br>
            <label for="gender">学生性别：</label>
            <input type="text" id="gender" name="gender"><br>
            <label for="klass">学生班级：</label>
            <input type="text" id="klass" name="klass"><br>
            <button type="submit">修改</button>
        </form>
    </div>
    </div>
</body>
</html>