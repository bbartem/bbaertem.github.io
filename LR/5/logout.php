<!-- logout.php -->
<?php
session_start();

// Удаление всех сессионных переменных
session_unset();

// Удаление сессионных cookie
session_destroy();

// Перенаправление на страницу гостевой книги
header("Location: index.php");
exit;
?>
