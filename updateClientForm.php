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
        include("showClient.php")    
    ?>

<form action="updateClient.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення Логіну</label><input name="login" type="text"><br>
        <label>Нове значення Пароля</label><input name="password" type="text"><br>
        <label>Нове значення ПІБ</label><input name="pib" type="text"><br>
        <label>Нове значення телефону</label><input name="telephone" type="text"><br>
        <label>Нове значення Адреси</label><input name="addres" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>