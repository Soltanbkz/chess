<?php
$servername = "localhost";
$username = "ваше_имя_пользователя";
$password = "ваш_пароль";
$dbname = "ваша_база_данных";

// Создаем соединение с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
  die("Ошибка соединения: " . $conn->connect_error);
}

// Получаем данные из формы
$name = $_POST['name'];
$email = $_POST['email'];

// Запрос на добавление данных в таблицу
$sql = "INSERT INTO test (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Данные успешно добавлены в базу данных";
} else {
  echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрываем соединение с базой данных
$conn->close();
?>
