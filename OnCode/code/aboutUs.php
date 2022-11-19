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
    <link rel="stylesheet" type="text/css" href="style/aboutUs.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="header">
        <a href="index.php"><img class="logo" src="img/Logo/logo2.svg" alt="Упс..."></a>
    </div>
    <nav>
        <a href="index.php">ГЛАВНАЯ</a>
        <a class="point" href="aboutUs.php">О НАС</a>
        <a href="contacts.php">КОНТАКТЫ</a>
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
        <div class="reviews">
            <p class="textkurs">Отзывы</p>
            <hr>
            <div class="slider">
                <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
                <input type="radio" name="slider" title="slide2" class="slider__nav"/>
                <input type="radio" name="slider" title="slide3" class="slider__nav"/>
                <input type="radio" name="slider" title="slide4" class="slider__nav"/>
                <div class="slider__inner">
                    <div class="slider__contents"><i class="slider__image far fa-user"></i>
                        <h2 class="slider__caption">Александр Авдошкин</h2>
                        <h4 class="slider__caption2">Инженер технической поддержки</h4>
                        <p class="slider__txt">"Если бы не коронавирус, выполнил бы всё в заход (в смысле каждый день по несколько пунктов в теме). Изучаю с нуля, ваш портал очень ориентирован на новичков. Спасибо вам большое!"</p>
                    </div>
                    <div class="slider__contents"><i class="slider__image far fa-user"></i>
                        <h2 class="slider__caption">Сергей Тюрин</h2>
                        <h4 class="slider__caption2">Мастер связи (сисадмин) в МЧС</h4>
                        <p class="slider__txt">"Очень всё доступно даже для полного профана вроде меня. Эта вводная по JS вошла в мой туговатый ум, складно как недостающий пазл. Всем кидаю линк на эту страничку."</p>
                    </div>
                    <div class="slider__contents"><i class="slider__image far fa-user"></i>
                        <h2 class="slider__caption">Элиях Клейман</h2>
                        <p class="slider__txt">"Для меня это первый курс для новичка. Понравилось тем, что вся информация структурирована и дана по мере изучения материала в иерархичном порядке, что значительно повышает и желание к обучению"</p>
                    </div>
                    <div class="slider__contents"><i class="slider__image far fa-user"></i>
                        <h2 class="slider__caption">Александр Авдошкин</h2>
                        <h4 class="slider__caption2">Инженер технической поддержки</h4>
                        <p class="slider__txt">"Если бы не коронавирус, выполнил бы всё в заход (в смысле каждый день по несколько пунктов в теме). Изучаю с нуля, ваш портал очень ориентирован на новичков. Спасибо вам большое!"</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="textkurs">О проекте</p>
        <hr>
        <div class="aboutProject">
            <h2 class="h2h2h2">Что такое OnCode</h2>
            <p class="ppp">Это открытый бесплатный проект для изучения основ программирования. Интерактивные курсы с практикой рассчитаны на тех, кто только начал интересоваться разработкой. На OnCode уже есть курсы по PHP, Java, JS, Python, HTML, CSS.</p>
            <h2 class="h2h2h2">Почему мы его создали</h2>
            <p class="ppp">Большинство доступных материалов для новичков больше похожи на справочники или туториалы в стиле «повтори за учителем».</p>
            <p class="ppp">Цель проекта OnCode — грамотный старт. Мы хотим научить начинающих программистов лучшим стандартам кодирования, правильному именованию функций, пониманию систем, а не запоминанию специфики.</p>
            <h2 class="h2h2h2">Как начать обучение?</h2>
            <p class="ppp">Достаточно просто зарегистрироваться. Регистрация на платформе бесплатная, после регистрации вы получите доступ ко всем курсам OnCode. Выбирайте любой – и проходите.</p>

        </div>
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