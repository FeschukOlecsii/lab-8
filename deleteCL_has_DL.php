<?php

$mysqli = new mysqli('localhost', 'root', '', 'mydb'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id1 = $_POST['id1'];
$id2 = $_POST['id2'];

$sql = "DELETE FROM `клієнти_has_доставка` WHERE `ID-Клієнта`='$id1' && `ID-Доставки`='$id2'";


if($mysqli->query($sql)){
    echo "Рядок видалено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }

/*Закриваємо з'єднання*/
$mysqli->close();

include("showCL_has_DL.php")
?>
