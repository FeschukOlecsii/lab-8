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
					$mysqli = new mysqli('localhost', 'root', '', 'mydb');
					$mysqli->set_charset("utf8");
					if (mysqli_connect_errno()) {
		   			 printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
		    			exit;
		    		}
		    		if($result = $mysqli->query('SELECT `категорія`.`Батьківська категорія`,`товари`.`Назва` FROM `категорія` INNER JOIN `категорія_has_товари` ON `категорія_has_товари`.`ID-категорії`=`категорія`.`ID-категорії` INNER JOIN `товари` ON `категорія_has_товари`.`ID-товару`=`товари`.`ID-товару`; ')) {
						printf("Категорія товарів: <br><br>");
		    		 	printf("<table><tr><th>Батьківська категорія</th><th>ID-товару</th></tr>");
		    		 	while( $row = $result->fetch_assoc() ){
		    		 	 printf("<tr><td>%s</td><td>%s</td></tr>", $row['Батьківська категорія'], $row['Назва']); 
		        		
		        		};
		        		printf("</table>");
		        		$result->close();
		        	}
		        	$mysqli->close();
				?>
				<br>
			</td>
				<tr><a href="http://localhost/my_project/index.html"><button style="width: 200px; height: 30px;">Головна</button></a><br><br>
				<tr><a href="http://localhost/my_project/insertCT_has_GDForm.php"><button style="width: 200px; height: 30px;">Додати категорію</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/updateCT_has_GDForm.php"><button style="width: 200px; height: 30px;">Змінити категорію</button></a></tr><br><br>
				<tr><a href="http://localhost/my_project/deleteCT_has_GDForm.php"><button style="width: 200px; height: 30px;">Видалити категорію</button></a></tr><br><br>
			</td>
			</div>
		</div>
	</body>
</html>