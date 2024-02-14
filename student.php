<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生</title>
    <link rel="stylesheet" href="style/public.css">
    <link rel="stylesheet" href="style/select.css">
    <script src="script/deleteStu.js" async></script>
</head>
<body>
    <?php include "header.php";?>
    <main>
        <?php include 'addStu.php';?>
        <button><a href="index.php">返回</a></button>
        <?php include "selectStu.php";?>
    </main>
    <?php include "footer.php";?>
</body>
</html>