<?php

$mysqli = new mysqli('localhost', 'root', '', 'mydb'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$lg = $_POST['login'];
$ps = $_POST['password'];
$pib = $_POST['pib'];
$tp = $_POST['telephone'];
$ad = $_POST['addres'];

$sql = "UPDATE `клієнти` SET `Логін` ='$lg', `Пароль` ='$ps', `ПІБ` ='$pib', `Телефон` ='$tp', `Адреса` ='$ad' WHERE `ID-Клієнта` ='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showClient.php")
?>
