<?php
// Конфигурация на базата данни
$host = 'localhost'; // Адрес на сървъра
$user = 'root'; // Потребителско име за MySQL
$password = ''; // Парола за MySQL (остави празно, ако няма)
$dbname = 'online_bookstore'; // Име на базата данни

// Свързване с MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Проверка за грешка при свързване
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
