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
            display: flexbox;
            list-style: none;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>学生管理系统</h1>
        <nav>
            <ul>
                <li>学生</li>
                <li>课程</li>
                <li>成绩</li>
            </ul>
        </nav>
    </header>
</body>
</html>