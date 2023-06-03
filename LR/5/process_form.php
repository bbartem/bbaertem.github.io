<!-- process_form.php -->
<?php
session_start();
// Параметры подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "guestbook";

// Проверка, была ли отправлена форма
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Установка соединения с базой данных
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    // Вставка данных в базу данных
    $sql = "INSERT INTO entries (name, age, email, comment) VALUES ('$name', $age, '$email', '$comment')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['name'] = $name;
        header("Location: welcome.php");
        exit;
    } else {
        echo "Ошибка при добавлении записи: " . $conn->error;
    }

    // Закрытие соединения с базой данных
    $conn->close();
}
?>
