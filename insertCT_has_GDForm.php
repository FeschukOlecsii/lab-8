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
        include("showCT_has_GD.php")    
    ?>

    <form action="insertCT_has_GD.php" method="post">
        <label>ID-category</label><input name="idc" type="text"><br>
        <label>ID-tovary</label><input name="idt" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
