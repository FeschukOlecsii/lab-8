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

<form action="updateCategory.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення Назви</label><input name="name" type="text"><br>
        <label>Значення Бать. категорії</label><input name="ParCat" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>