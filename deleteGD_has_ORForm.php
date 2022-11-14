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

<form action="deleteGD_has_OR.php" method="post">
        <label>ІД товару, який видаляємо</label><input name="id1" type="text"><br>
        <label>ІД замовлення, який видаляємо</label><input name="id2" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>