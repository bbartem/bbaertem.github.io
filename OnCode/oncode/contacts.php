<?php
include 'app/database/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>OnCode</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/contacts.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>

    <!-- библиотека jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- плагин Masked Input -->
    <script src="scripts/jquery.maskedinput.min.js"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="index.php"><img class="logo" src="img/Logo/logo2.svg" alt="Упс..."></a>
    </div>
    <nav>
        <a href="index.php">ГЛАВНАЯ</a>
        <a href="aboutUs.php">О НАС</a>
        <a class="point" href="contacts.php">КОНТАКТЫ</a>
        <?php if (isset($_SESSION['id'])):?>
            <a class="aaccount" href="#zatemnenie">ЛИЧНЫЙ КАБИНЕТ</a>
            <a href = "logout.php">ВЫХОД</a>
        <?php else: ?>
            <a href="login.php">ВХОД</a>
            <a href="registration.php">РЕГИСТРАЦИЯ</a>
        <?php endif; ?>
        <div id="zatemnenie">
            <div id="okno">
                <p class="accountText"><?php echo $_SESSION['login']; ?></p>
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></i></a>
            </div>
        </div>
    </nav>
    <div class="content">
        <p class="textkurs">Связаться с нами</p>
        <hr>
        <form method="post" action="telegram.php">
            <p class="contact">Привет, меня зовут<input name="username-telegram" type="text" id="name" class="contactName" placeholder="@username Telegram">.</p><br>
            <textarea placeholder="Ваш вопрос." name="text"></textarea>

            <script type="text/javascript">
                $("#name").click(function(){
                    $(this).setCursorPosition(1);
                }).mask("@***?***************************");
            </script>
            <script type="text/javascript">
                $.fn.setCursorPosition = function(pos) {
                    if ($(this).get(0).setSelectionRange) {
                        $(this).get(0).setSelectionRange(pos, pos);
                    } else if ($(this).get(0).createTextRange) {
                        var range = $(this).get(0).createTextRange();
                        range.collapse(true);
                        range.moveEnd('character', pos);
                        range.moveStart('character', pos);
                        range.select();
                    }
                };
            </script>
            <div class="buttonC">
                <button class="button" type="submit" name="submit">Отправить</button>
            </div>
        </form>
    </div>
    <div class="clear">
    </div>
    <footer>
        <div class="footer">
            <div class="row2">
                <div class="colFooter col1">
                    <p class="textFooter">OnCode</p><p class="text3">Бесплатные курсы<br>программирования</p>
                </div>
                <div class="colFooter col2">
                    <a class="navFooter" href="index.php">ГЛАВНАЯ</a>
                    <a class="navFooter" href="aboutUs.php">О НАС</a>
                    <a class="navFooter" href="contacts.php">КОНТАКТЫ</a>
                    <?php if (isset($_SESSION['id'])):?>
                        <a class="aaccount" href="#zatemnenie">ЛИЧНЫЙ КАБИНЕТ</a>
                        <a href = "logout.php">ВЫХОД</a>
                    <?php else: ?>
                        <a href="login.php">ВХОД</a>
                        <a href="registration.php">РЕГИСТРАЦИЯ</a>
                    <?php endif; ?>
                    <div id="zatemnenie">
                        <div id="okno">
                            <p class="accountText"><?php echo $_SESSION['login']; ?></p>
                            <a href="#" class="close"><i class="fa-solid fa-xmark"></i></i></a>
                        </div>
                    </div>
                </div>
                <div class="colFooter col3">
                    <a class="aFooter" href="https://t.me/artiisshok"><i class="fa-brands fa-telegram"></i>Artiisshok</a>
                    <a class="aFooter" href="https://t.me/bbartem"><i class="fa-brands fa-telegram"></i>BBArtem</a>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>