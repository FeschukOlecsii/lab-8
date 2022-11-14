<?php

$mysqli = new mysqli('localhost', 'root', '', 'mydb'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id1 = $_POST['id1'];
$id2= $_POST['id2'];
$id3 = $_POST['id3'];
$id4= $_POST['id4'];


$sql = "UPDATE `клієнти_has_доставка` SET `ID-Клієнта` ='$id3', `ID-Доставки` ='$id4' WHERE `ID-Клієнта` ='$id1' && `ID-Доставки` ='$id2'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showCL_has_DL.php")
?>
