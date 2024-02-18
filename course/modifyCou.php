<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改课程信息</title>
    <style>
        .modifyCou{
            width: 800px;
            height: 400px;
            border: 1px solid;
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
    <div class="modifyCou">
        <form action="updateCou.php" method="get" autocomplete="off">
            <label for="id">课程序号：</label>
            <input type="text" id="id" name="id" readonly><br>
            <label for="name">课程姓名：</label>
            <input type="text" id="name" name="name"><br>
            <label for="teacher">任课教师：</label>
            <input type="text" id="gender" name="teacher"><br>
            <button type="submit">修改</button>
        </form>
    </div>
    </div>
</body>
</html>