<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Замовлення клієнтів</title>
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
					
		    		if($result = $mysqli->query('SELECT `товари`.`Назва` ,`замовлення_has_клієнти`.`ID-Клієнта` FROM `замовлення_has_клієнти` INNER JOIN `товари_has_замовлення` ON `замовлення_has_клієнти`.`Номер Замовлення`=`товари_has_замовлення`.`Номер Замовлення` INNER JOIN `товари` ON `товари_has_замовлення`.`ID-товару`=`товари`.`ID-товару`; ')) {
						printf("Замовлення клієнтів: <br><br>");
		    		 	printf("<table><tr><th>№ замовлення</th><th>ID-клієнта</th></tr>");
		    		 	while( $row = $result->fetch_assoc() ){
		    		 	printf("<tr><td>%s</td><td>%s</td></tr>", $row['Назва'], $row['ID-Клієнта']); 
		        		
		        		};
		        		printf("</table>");
		        		$result->close();
		        	}
		        	$mysqli->close();
				?>
			<br>
			</td>
				<tr><a href="http://localhost/my_project/index.html"><button style="width: 200px; height: 30px;">Головна</button></a><br><br>
				<tr><a href="http://localhost/my_project/insertOR_has_CLForm.php"><button style="width: 200px; height: 30px;">Додати замовлення</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/updateOR_has_CLForm.php"><button style="width: 200px; height: 30px;">Змінити замовлення</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/deleteOR_has_CLForm.php"><button style="width: 200px; height: 30px;">Видалити замовлення</button></a></tr><br><br>
			</td>
			</div>
		</div>
	</body>
</html>