<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showCL_has_DL.php")    
    ?>

    <form action="insertCL_has_DL.php" method="post">
        <label>ID-clienta</label><input name="idc" type="text"><br>
        <label>ID-delivery</label><input name="idd" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
