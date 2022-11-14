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
        include("showCategory.php")    
    ?>

    <form action="insertCategory.php" method="post">
        <label>ID</label><input name="id" type="text"><br>
        <label>Name</label><input name="name" type="text"><br>
        <label>ParCat</label><input name="parcat" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
