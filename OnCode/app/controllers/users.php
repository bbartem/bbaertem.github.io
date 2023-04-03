<?php
include "app/database/db.php";
define ('BASE_URL' , '../index.php');
$errMsg = '';
$regStatus = '';

//Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-sec']);

    if($name === '' || $email === '' || $passF === ''){
        $errMsg = "Не все поля заполнены";
    }elseif(mb_strlen($name, 'UTF-8') < 2){
        $errMsg = "Логин короче 2-х символов";
    }elseif($passF !== $passS){
        $errMsg = "Пароли в обоих полях должны совпадать";
    }
    else{
        $existence = selectOne('users' , ['email' => $email]);
        if($existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже есть, попробуйте другую";
        }else{
            //$pass  = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => $passF
            ];
            $id=insert('users', $post);
            
            //$errMsg = "Пользователь $name успешно зарегистрирован";
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            header('location: ' . BASE_URL);
        }
    }
}
else{
    $name = '';
    $username = '';
    $email = '';
}

//Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены";
    }else {
        $existence = selectOne('users', ['email' => $email]);
        
        if($existence && $pass === $existence['password']){
        
            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            header('location: ' . BASE_URL);
        
        }else{
            $errMsg = "Почта либо пароль введены неверно";
        }
        
    }
}else{
    $email = '';
}
