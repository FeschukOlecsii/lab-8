<?php

$mysqli = new mysqli('localhost', 'root', '', 'mydb'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id'];
$nam = $_POST['name'];
$pr = $_POST['price'];
$nm = $_POST['number'];
$ch = $_POST['characteristic'];

$sql = "UPDATE `товари` SET `Назва` ='$nam', `Вартість` ='$pr',`К-сть товару` ='$nm',`Характеристика` ='$ch' WHERE `ID-товару` ='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showGoods.php")
?>
