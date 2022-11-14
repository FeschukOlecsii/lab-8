<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Замовлення</title>
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
		    		if($result = $mysqli->query('SELECT * FROM замовлення ')) {
						printf("Замовлення: <br><br>");
		    		 	printf("<table><tr><th>Номер</th><th>Дата</th><th>Статус</th></tr>");
		    		 	while( $row = $result->fetch_assoc() ){
		    		 	 printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['Номер'], $row['Дата'], $row['Статус']); 
		        		
		        		};
		        		printf("</table>");
		        		$result->close();
		        	}
		        	$mysqli->close();
				?>
			<br>
			</td>
				<tr><a href="http://localhost/my_project/index.html"><button style="width: 200px; height: 30px;">Головна</button></a><br><br>
				<tr><a href="http://localhost/my_project/insertOrderForm.php"><button style="width: 200px; height: 30px;">Додати замовлення</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/updateOrderForm.php"><button style="width: 200px; height: 30px;">Змінити замовлення</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/deleteOrderForm.php"><button style="width: 200px; height: 30px;">Видалити замовлення</button></a></tr><br><br>
			</td>
			</div>
		</div>
	</body>
</html>