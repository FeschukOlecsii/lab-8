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
        include("showOrder.php")    
    ?>

    <form action="insertOrder.php" method="post">
        <label>Data</label><input name="data" type="text"><br>
        <label>Status</label><input name="status" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
