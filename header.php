<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        header{
            width: 100%;
            height: 100px;
            background-color: #002D5E;
            color: white;
            text-align: center;
            position: relative;
        }
        header nav{
            width: 100%;
            height: 30px;
            background-color: #008CBA;
            position: absolute;
            bottom: 0;
        }
        header nav ul{
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }
        header nav ul li{
            display: flex;
            list-style: none;
            font-size: 20px;
        }
        header nav ul li a{
            color: white;
        }
        header nav ul li a:hover{
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>学生管理系统</h1>
        <nav>
            <ul>
                <li id="stu"><a href="student/student.php">学生</a></li>
                <li id="course"><a href="">课程</a></li>
                <li id="grade"><a href="">成绩</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>