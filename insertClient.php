<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Користувач</title>
	</head>
	<body>
		<div class="mainbox">
			<div class="content">

			<?php

            $mysqli = new mysqli('localhost', 'root', '', 'mydb'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
            $mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

            if (mysqli_connect_errno()) {
                printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
                exit;
            }
            
             $lg = $_POST['login']; $ps = $_POST['password']; 
             $pb = $_POST['pib']; $tp = $_POST['telephone']; $ad = $_POST['addres']; 
            
            $sql = "INSERT INTO `клієнти` ( `Логін`, `Пароль`, `ПІБ`, `Телефон`, `Адреса`) VALUES 
            ( '$lg', '$ps', '$pb', '$tp', '$ad')";

            if($mysqli->query($sql)){
                echo "Рядок вставлено успішно";
            }
            else
            {
                echo "Error" . $sql . "<br/>" . $mysqli->error;
            }
            /*Закриваємо з'єднання*/
            $mysqli->close();

            include("showClient.php")
            ?>
            
			
			</div>
		</div>
	</body>
</html>