<?php
if (isset($_POST['write'])) {
    $text = $_POST['text'];
    file_put_contents('test.txt', $text . PHP_EOL, FILE_APPEND);
}
if (isset($_POST['read'])) {
    $text = file_get_contents('test.txt');
}
?>
<html>
<head>
    <title>Практическая работа №7</title>
</head>
<body>
<h1>Работа с файлами</h1>
<div style="display: flex;">
    <div style="flex: 1;">
        <h2>Записать в файл</h2>
        <form method="POST">
            <textarea name="text" rows="5" cols="30" required></textarea>
            <br><br>
            <input type="submit" name="write" value="Записать">
        </form>
    </div>
    <div style="flex: 1;">
        <h2>Считать из файла</h2>
        <form method="POST">
            <textarea name="output" rows="5" cols="30" readonly><?php echo isset($text) ? $text : ''; ?></textarea>
            <br><br>
            <input type="submit" name="read" value="Считать">
        </form>
    </div>
</div>
</body>
</html>
