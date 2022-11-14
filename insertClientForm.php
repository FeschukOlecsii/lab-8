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

    <form action="insertClient.php" method="post">
        <label>Login</label><input name="login" type="text"><br>
        <label>Password</label><input name="password" type="text"><br>
        <label>PIB</label><input name="pib" type="text"><br>
        <label>Telephone</label><input name="telephone" type="text"><br>
        <label>Addres</label><input name="addres" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
