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
        include("showGoods.php")    
    ?>

    <form action="insertGoods.php" method="post">
        <label>ID</label><input name="id" type="text"><br>
        <label>Name</label><input name="name" type="text"><br>
        <label>Price</label><input name="price" type="text"><br>
        <label>Number</label><input name="number" type="text"><br>
        <label>Characteristic</label><input name="characteristic" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
