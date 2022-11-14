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
        include("showGD_has_OR.php")    
    ?>

    <form action="insertGD_has_OR.php" method="post">
        <label>ID-tovary</label><input name="idt" type="text"><br>
        <label>ID-order</label><input name="idz" type="text"><br>
        <label>ID-client</label><input name="idu" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
