<?php include "../utils/loginStatus.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成绩</title>
    <link rel="stylesheet" href="../style/public.css">
    <link rel="stylesheet" href="../style/select.css">
    <script src="https://unpkg.zhimg.com/axios/dist/axios.min.js"></script>
    <script src="../script/deleteSco.js" async></script>
    <script src="../script/updateSco.js" async></script>
</head>
<body>
    <?php include "../header.php"?>
    <main>
        <?php include "addSco.php"?>
        <button><a href="/index.php">返回</a></button>
        <?php include "modifySco.php"?>
        <?php include "selectSco.php"?>
    </main>
    <?php include "../footer.php"?>
</body>
</html>