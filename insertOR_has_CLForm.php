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
        include("showOR_has_CL.php")    
    ?>

    <form action="insertOR_has_CL.php" method="post">
        <label>ID-order</label><input name="idz" type="text"><br>
        <label>ID-clienta</label><input name="idc" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
