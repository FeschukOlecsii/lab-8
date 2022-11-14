<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Доставка товарів</title>
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
		    		if($result = $mysqli->query('SELECT `клієнти`.`ПІБ` ,`доставка`.`Назва сервісу` FROM `клієнти` INNER JOIN `клієнти_has_доставка` ON `клієнти_has_доставка`.`ID-Клієнта`=`клієнти`.`ID-Клієнта` INNER JOIN `доставка` ON `доставка`.`ID-Доставки`=`клієнти_has_доставка`.`ID-Доставки`; ')) {
						printf("Доставка товарів: <br><br>");
		    		 	printf("<table><tr><th>ID-клієнта</th><th>ID-доставки</th></tr>");
		    		 	while( $row = $result->fetch_assoc() ){
		    		 	printf("<tr><td>%s</td><td>%s</td></tr>", $row['ПІБ'], $row['Назва сервісу']); 
		        		
		        		};
		        		printf("</table>");
		        		$result->close();
		        	}
		        	$mysqli->close();
				?>
			<br>
			</td>
				<tr><a href="http://localhost/my_project/index.html"><button style="width: 200px; height: 30px;">Головна</button></a><br><br>
				<tr><a href="http://localhost/my_project/insertCL_has_DLForm.php"><button style="width: 200px; height: 30px;">Додати доставку</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/updateCL_has_DLForm.php"><button style="width: 200px; height: 30px;">Змінити доставку</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/deleteCL_has_DLForm.php"><button style="width: 200px; height: 30px;">Видалити доставку</button></a></tr><br><br>
			</td>
			</div>
		</div>
	</body>
</html>