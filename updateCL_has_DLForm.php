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

<form action="updateCL_has_DL.php" method="post">
        <label>ІД клієнта який змінюємо</label><input name="id1" type="text"><br>
        <label>ІД доставки який змінюємо</label><input name="id2" type="text"><br>
        <p>Нові занчення</p><br>
        <label>ІД клієнта</label><input name="id3" type="text"><br>
        <label>ІД доставки</label><input name="id4" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>