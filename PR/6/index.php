<?php
if (isset($_GET['create_page1'])) {
    // Set the name of the student and the group number
    $student_name = "Бреус Артём";
    $group_number = "22-Д9-3ИНС";

    // Generate the HTML code for the page
    $html = "<html lang='ru'>\n";
    $html .= "<head>\n";
    $html .= "<title>Практическая работа №6 - 1</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $html .= "<h1>Практическая работа №6</h1>\n";
    $html .= "<p>Выполнил студент группы $group_number:</p>\n";
    $html .= "<ul>\n";
    $html .= "<li>$student_name</li>\n";
    $html .= "</ul>\n";
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
} else if (isset($_GET['create_page2'])) {
    $html = "<html lang='ru'>\n";
    $html .= "<head>\n";
    $html .= "<title>Практическая работа №6 - 2</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $html .= "<h2>Таблица умножения на 15</h2>\n";
    $html .= "<table>\n"; // added table tag
    for ($i = 1; $i <= 10; $i++) {
        $html .= "<tr>\n";
        $html .= "<td>$i</td>\n";
        $html .= "<td>x</td>\n";
        $html .= "<td>15</td>\n";
        $html .= "<td>=</td>\n";
        $html .= "<td>" . ($i * 15) . "</td>\n";
        $html .= "</tr>\n";
    }
    $html .= "</table>\n";
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
} else if (isset($_GET['create_page3'])) {
    $html = "<html lang='ru'>\n";
    $html .= "<head>\n";
    $html .= "<title>Практическая работа №6 - 3</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $html .= "<h2>Формула</h2>\n";
    $x = 1.23;
    $y = 4.56;
    $result = pow(1 - tan($x), ceil((1 / tan($x)))) + cos($x - $y);
    $html .= "<p>X = 1.23, Y = 4.56. Ответ: $result</p>\n";
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
} else if (isset($_GET['create_page4'])) {
    $html = "<html lang='ru'>\n";
    $html .= "<head>\n";
    $html .= "<title>Практическая работа №6 - 4</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $arr = [1,2,3,4,5];
    $result = count($arr);
    echo print_r($arr);
    $html .= "<p>Кол-во: $result</p>";
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
}else if (isset($_GET['create_page5'])) {
    $html = "<html lang='ru'>\n";
    $html .= "<head>\n";
    $html .= "<title>Практическая работа №6 - 5</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $arr = [5, 4, 3, 2, 1];
    $last_element = $arr[count($arr) - 1];
    echo print_r($arr);
    $html .= "<p>Кол-во: $last_element</p>";
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
}else if (isset($_GET['create_page6'])) {
    $html = "<html lang='ru'>\n";
    $html .= "<head>\n";
    $html .= "<title>Практическая работа №6 - 6</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $html .= "<form method='POST'>";
    $html .= "<label for='password'>Введите Ваш пароль:</label>";
    $html .= "<input type='password' id='password' name='password' required>";
    $html .= "<br><br>";
    $html .= "<input type='submit' name='submit' value='Check password'>";
    $html .= "</form>";
    if (isset($_POST['submit'])) {
        $password = $_POST['password'];
        $length = strlen($password);
        if ($length > 5 && $length < 10) {
            echo "<p>Пароль подходит!</p>";
        } else {
            echo "<p>Вам нужно придумать другой пароль.</p>";
        }
    }
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
}else if (isset($_GET['create_page7'])) {
    $html = "<html lang='ru'>\n";
    $html .= "<head>\n";
    $html .= "<title>Практическая работа №6 - 7</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $arr = array();
    for ($i = 1; $i <= 10; $i++) {
        $str = "";
        for ($j = 0; $j < $i; $j++) {
            $str .= $i;
        }
        $arr[] = $str;
    }
    echo "<ul>\n";
    foreach ($arr as $value) {
        echo "<li>$value</li>\n";
    }
    echo "</ul>\n";
    $html .= "</body>\n";
    $html .= "</html>";
    echo $html;
}
?>

<html lang="ru">
<head>
    <title>Практическая работа №6</title>
</head>
<body>
<h1>Практическая работа №6 - Бреус Артём</h1>
<form method="GET">
    <input type="submit" name="create_page1" value="Задание 1">
    <input type="submit" name="create_page2" value="Задание 2">
    <input type="submit" name="create_page3" value="Задание 3">
    <input type="submit" name="create_page4" value="Задание 4">
    <input type="submit" name="create_page5" value="Задание 5">
    <input type="submit" name="create_page6" value="Задание 6">
    <input type="submit" name="create_page7" value="Задание 7">
</body>
</html>
