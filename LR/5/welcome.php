<?php
session_start();

// Проверка, установлена ли сессия с именем
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    // Если сессия не установлена, перенаправление обратно на страницу гостевой книги
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Приветствие</title>
</head>
<body>
<h1>Привет, <?php echo $name; ?>!</h1>
<a href="logout.php">Выход</a>
</body>
</html>
