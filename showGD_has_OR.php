<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="style/style.css">
		<title>Замовлення товарів</title>
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
					
		    		if($result = $mysqli->query('SELECT `замовлення`.`Номер` ,`товари`.`Назва`FROM `товари` INNER JOIN `товари_has_замовлення` ON `товари_has_замовлення`.`ID-товару`=`товари`.`ID-товару` INNER JOIN `замовлення` ON `товари_has_замовлення`.`Номер Замовлення`=`замовлення`.`Номер`; ')) {
						printf("Замовлення товарів: <br><br>");
		    		 	printf("<table><tr><th>№ замовлення</th><th>Назва товару</th></tr>");
		    		 	while( $row = $result->fetch_assoc() ){
		    		 	printf("<tr><td>%s</td><td>%s</td></tr>", $row['Номер'], $row['Назва']); 
		        		
		        		};
		        		printf("</table>");
		        		$result->close();
		        	}
		        	$mysqli->close();
				?>
				<br>
			</td>
				<tr><a href="http://localhost/my_project/index.html"><button style="width: 200px; height: 30px;">Головна</button></a><br><br>
				<tr><a href="http://localhost/my_project/insertGD_has_ORForm.php"><button style="width: 200px; height: 30px;">Замовити товар</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/updateGD_has_ORForm.php"><button style="width: 200px; height: 30px;">Оновити товар</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/deleteGD_has_ORForm.php"><button style="width: 200px; height: 30px;">Видалити товар</button></a></tr><br><br>
			</td>
			</div>
		</div>
	</body>
</html>