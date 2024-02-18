<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>课程</title>
    <link rel="stylesheet" href="../style/public.css">
    <link rel="stylesheet" href="../style/select.css">
    <script src="../script/deleteCou.js" async></script>
    <script src="../script/updateCou.js" async></script>
</head>
<body>
    <?php include "../header.php"?>
    <main>
        <?php include "addCou.php"?>
        <button><a href="/">返回</a></button>
        <?php include "modifyCou.php"?>
        <?php include "selectCou.php"?>
    </main>
    <?php include "../footer.php"?>
</body>
</html>