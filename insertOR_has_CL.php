<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Категорія товарів</title>
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
            
             $idz = $_POST['idz']; $idc = $_POST['idc']; 

            $sql = "INSERT INTO `замовлення_has_клієнти` (`Номер Замовлення`, `ID-Клієнта`) VALUES 
            ('$idz', '$idc')";

            if($mysqli->query($sql)){
                echo "Рядок вставлено успішно";
            }
            else
            {
                echo "Error" . $sql . "<br/>" . $mysqli->error;
            }
            /*Закриваємо з'єднання*/
            $mysqli->close();

            include("showOR_has_CL.php")
            ?>
            
			
			</div>
		</div>
	</body>
</html>