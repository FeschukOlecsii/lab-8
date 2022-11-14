<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Клієнти</title>
	</head>
	<body>
		<div class="mainbox">
			<div class="content">
				<?php
					$mysqli = new mysqli('localhost', 'root', '', 'mydb');
					$mysqli->set_charset("utf8");
					if (mysqli_connect_errno()) {
		   			 printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
		    			exit;
		    		}
		    		if($result = $mysqli->query('SELECT * FROM клієнти')) {
						printf("Клієнти, які зареєстровані на сайті: <br><br>");
		    		 	printf("<table><tr><th>ID</th><th>Логін</th><th>Пароль</th><th>ПІБ</th><th>Телефон</th><th>Адреса</th></tr>");
						
		    		 	while( $row = $result->fetch_assoc() ){
		    		 	 printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['ID-Клієнта'], $row['Логін'], $row['Пароль'], $row['ПІБ'], $row['Телефон'], $row['Адреса']); 
		        		
		        		};
		        		printf("</table>");
		        		$result->close();
		        	}
		        	$mysqli->close();
				?>
				<br>
			</td>
				<tr><a href="http://localhost/my_project/index.html"><button style="width: 200px; height: 30px;">Головна</button></a><br><br>
				<tr><a href="http://localhost/my_project/insertClientForm.php"><button style="width: 200px; height: 30px;">Додати користувача</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/updateClientForm.php"><button style="width: 200px; height: 30px;">Змінити користувача</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/deleteClientForm.php"><button style="width: 200px; height: 30px;">Видалити користувача</button></a></tr><br><br>
			</td>
			</div>
		</div>
	</body>
</html>