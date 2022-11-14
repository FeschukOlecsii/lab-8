<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Доставка</title>
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
		    		if($result = $mysqli->query('SELECT * FROM доставка')) {
						printf("Доставка: <br><br>");
		    		 	printf("<table><tr><th>ID доставки</th><th>Назва сервісу</th><th>Статус</th></tr>");
		    		 	while( $row = $result->fetch_assoc() ){
		    		 	 printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['ID-Доставки'], $row['Назва сервісу'], $row['Статус']); 
		        		
		        		};
		        		printf("</table>");
		        		$result->close();
		        	}
		        	$mysqli->close();
				?>
				<br>
			</td>
				<tr><a href="http://localhost/my_project/index.html"><button style="width: 200px; height: 30px;">Головна</button></a><br><br>
				<tr><a href="http://localhost/my_project/insertDeliveryForm.php"><button style="width: 200px; height: 30px;">Додати доставку</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/updateDeliveryForm.php"><button style="width: 200px; height: 30px;">Змінити доставку</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/deleteDeliveryForm.php"><button style="width: 200px; height: 30px;">Видалити доставку</button></a></tr><br><br>
			</td>
			</div>
		</div>
	</body>
</html>