<!DOCTYPE html>
<html>
<head>
    <title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга</h1>
<form method="POST" action="process_form.php">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    <label for="age">Возраст:</label>
    <input type="number" id="age" name="age" required>
    <br><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="comment">Комментарий:</label>
    <textarea id="comment" name="comment" rows="5" cols="30" required></textarea>
    <br><br>
    <input type="submit" name="submit" value="Отправить">
</form>
</body>
</html>
