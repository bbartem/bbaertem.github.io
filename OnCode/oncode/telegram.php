<?php
$token = '5819842733:AAFjfRcGd8QaplS7uOK4VRvrEwQo4mAj9WQ';
$chat_id = '-791840184';

$arr = Array(
    "Username: " => $_POST['username'],
    "Вопрос: " => $_POST['text'],
);

foreach ($arr as $key => $value) { // Создаем строку со всеми данными от клиента для передачи API Telegram
        $txt .= "<b>" . $key . "</b>" . $value . "%0A";
    }
    $url = " https://api.telegram.org/bot {$token}/sendMessage?chat_id={$chat_id}}&parse_mode=html&text={$txt}";
    $proxy = "67.154.111.452:3128";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

    curl_setopt($ch, CURLOPT_PROXY, $proxy);

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    $curl_scraped_page = curl_exec($ch);
    curl_close($ch);
?>