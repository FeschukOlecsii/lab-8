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


$sql = "UPDATE `замовлення_has_клієнти` SET `Номер Замовлення` ='$id3', `ID-Клієнта` ='$id4' WHERE `Номер Замовлення` ='$id1' && `ID-Клієнта` ='$id2'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showOR_has_CL.php")
?>
