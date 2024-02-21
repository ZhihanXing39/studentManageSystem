<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改成绩</title>
    <style>
        .modifySco{
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
    <div class="modifySco">
        <form action="updateSco.php" method="get" autocomplete="off">
            <label for="sid">学生序号：</label>
            <input type="text" id="sid" name="sid" readonly class="sid"><br>
            <label for="cid">课程序号：</label>
            <input type="text" id="cid" name="cid" readonly class="cid"><br>
            <label for="grade">成绩：</label>
            <input type="text" id="grade" name="grade"><br>
            <button type="submit">修改</button>
        </form>
    </div>
    </div>
</body>
</html>