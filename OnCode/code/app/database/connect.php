<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'o92867ev_oncode';
$db_user = 'o92867ev_oncode';
$db_pass = '1cOderoot';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);
}
catch (PDOException $i){
    die('database connection error');
}

