<?php
include ("app/controllers/users.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>OnCode</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <<a href="index.php"><img class="logo" src="img/Logo/logo2.svg"></a>
    </div>
    <nav>
        <a href="index.php">ГЛАВНАЯ</a>
        <a href="aboutUs.php">О НАС</a>
        <a href="contacts.php">КОНТАКТЫ</a>
        <a class="point" href="login.php">ВХОД</a>
        <a href="registration.php">РЕГИСТРАЦИЯ</a>
    </nav>
    <div class="content">
        <h1 class="ts">Вход</h1>
        <hr>
        <main class = "main-login">
            <div class = "register-form-container">
                <h1 class = "form-title"></h1>
                <h2><?=$errMsg?></h2>
                <div class = "form-fields">
                    <form class = "js-form" id = "form1" method = "post" action="login.php">
                        <div class = "form-field">
                            <input value = "<?=$email?>" type = "email" placeholder="Email" class = "input js-input js-input-email" name = "email">
                        </div>
                        <div class = "form-field">
                            <input name = "password" type = "password" placeholder="Пароль" class="input js-input">
                        </div>
                        <button class = "button" name = "button-log">Войти</button>
                    </form>
                </div>
                <div class = "form-buttons">
                    <div class = "divider">Или</div>
                    <a href = "registration.php">Зарегистрироваться</a>
                    <h1 class = "form-title"></h1>
                </div>
            </div>
        </main>
    </div>
    <div class="clear">
    </div>
    <footer>
        <div class="footer">
            <div class="row2">
                <div class="colFooter col1">
                    <p class="textFooter">OnCode</p><br><p class="text3">Бесплатные курсы<br>программирования</p>
                </div>
                <div class="colFooter col2">
                    <a class="navFooter" href="index.php">ГЛАВНАЯ</a>
                    <a class="navFooter" href="aboutUs.php">О НАС</a>
                    <a class="navFooter" href="contacts.php">КОНТАКТЫ</a>
                    <a class="navFooter" href="login.php">ВХОД</a>
                    <a class="navFooter" href="registration.php">РЕГИСТРАЦИЯ</a>
                </div>
                <div class="colFooter col3">
                    <a class="aFooter" href="https://t.me/artiisshok"><i class="fa-brands fa-telegram"></i>Artiisshok</a>
                    <a class="aFooter" href="https://t.me/bbartem"><i class="fa-brands fa-telegram"></i>BBArtem</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="scripts/signIn.js" type="text/javascript"></script>
</body>
</html>