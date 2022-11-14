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

<form action="updateGD_has_OR.php" method="post">
        <label>ІД товару який змінюємо</label><input name="id1" type="text"><br>
        <label>ІД замовлення який змінюємо</label><input name="id2" type="text"><br>
        <p>Нові занчення</p><br>
        <label>ІД товару</label><input name="id3" type="text"><br>
        <label>ІД замовлення</label><input name="id4" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>