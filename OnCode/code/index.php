<?php
    include 'app/database/db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!--
                                            888
                                            888
                                            888
     .d88b.  88888b.   .d8888b .d88b.   .d88888  .d88b.
    d88""88b 888 "88b d88P"   d88""88b d88" 888 d8P  Y8b
    888  888 888  888 888     888  888 888  888 88888888
    Y88..88P 888  888 Y88b.   Y88..88P Y88b 888 Y8b.
     "Y88P"  888  888  "Y8888P "Y88P"   "Y88888  "Y8888

    2022 © Atish0k BBArtem

    -->
    <title>OnCode</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" type="text/css" href="style/card.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link href="modal.html">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="index.php"><img class="logo" src="img/Logo/logo2.svg" alt="Упс..."></a>
        </div>
        <nav>
            <a class="point" href="index.php">ГЛАВНАЯ</a>
            <a href="aboutUs.php">О НАС</a>
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
                    <p class="accountText"><?php echo $_SESSION['login'];?>. Личный кабинет в разработке</p>
                    <a href="#" class="close"><i class="fa-solid fa-xmark"></i></i></a>
                </div>
            </div>

        </nav>
        <div class="content">
            <hr>
            <div class="container2">
                <div class="block">
                    <div class="textBlock">
                        <p class="text1">
                            Бесплатные курсы программирования
                        </p>
                        <p class="text2">
                            Изучи
                        <a id="Ticker" class="tickerText" href="#">Текст</a>
                        <script type="text/javascript">
                            var CharTimeout = 100; // скорость печатания
                            var StoryTimeout = 2000; // время ожидания перед переключением

                            var Summaries = new Array();
                            var SiteLinks = new Array();

                            Summaries[0] = 'Java';
                            SiteLinks[0] = 'https://ru.code-basics.com/languages/java';
                            Summaries[1] = 'JavaScript';
                            SiteLinks[1] = 'https://ru.code-basics.com/languages/javascript';
                            Summaries[2] = 'Python';
                            SiteLinks[2] = 'https://ru.code-basics.com/languages/python';
                            Summaries[3] = 'HTML';
                            SiteLinks[3] = 'https://ru.code-basics.com/languages/python';
                            Summaries[4] = 'CSS';
                            SiteLinks[4] = 'https://ru.code-basics.com/languages/css';
                            Summaries[5] = 'PHP';
                            SiteLinks[5] = 'https://ru.code-basics.com/languages/php';
                            Summaries[6] = 'C#';
                            SiteLinks[6] = 'https://ru.code-basics.com/languages/csharp';

                            function startTicker(){
                                massiveItemCount =  Number(Summaries.length); //количество элементов массива
                                // Определяем значения запуска
                                CurrentStory     = -1;
                                CurrentLength    = 0;
                                // Расположение объекта
                                AnchorObject     = document.getElementById("Ticker");
                                runTheTicker();
                            }
                            // Основной цикл тиккера
                            function runTheTicker(){
                                var myTimeout;
                                // Переход к следующему элементу
                                if(CurrentLength == 0){
                                    CurrentStory++;
                                    CurrentStory      = CurrentStory % massiveItemCount;
                                    StorySummary      = Summaries[CurrentStory].replace(/"/g,'-');
                                    AnchorObject.href = SiteLinks[CurrentStory];
                                }
                                // Располагаем текущий текст в анкор с печатанием
                                AnchorObject.innerHTML = StorySummary.substring(0,CurrentLength) + znak();
                                // Преобразуем длину для подстроки и определяем таймер
                                if(CurrentLength != StorySummary.length){
                                    CurrentLength++;
                                    myTimeout = CharTimeout;
                                } else {
                                    CurrentLength = 0;
                                    myTimeout = StoryTimeout;
                                }
                                // Повторяем цикл с учетом задержки
                                setTimeout("runTheTicker()", myTimeout);
                            }
                            // Генератор подстановки знака
                            function znak(){
                                if(CurrentLength == StorySummary.length) return "";
                                else return "|";
                            }

                            startTicker();
                        </script>
                        </p>
                        <p class="lead">
                            Самый быстрый способ попробовать программирование прямо в браузере. Бесплатные курсы с тренажером. Практика после каждого урока.
                        </p>
                        <div class="buttonC">
                            <a class="button" type="button">Попробовать</a>
                        </div>
                    </div>
                    <div class="codeBlock">
                        <pre class="code">
                            <code>
&lt;div id=&quot;header&quot;&gt;
    &lt;div id=&quot;logo&quot;&gt;
     &lt;h1&gt;Logo&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div id=&quot;tagline&quot;&gt;
        &lt;h3&gt;And a little tagline, too.&lt;/h3&gt;
    &lt;/div&gt;
    &lt;ul id=&quot;menu&quot;&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;&lt;!--end header --&gt;
                            </code>
                        </pre>
                    </div>
                </div>
                <p class="textkurs">Курсы</p>
            </div>
            <hr>
            <div class="container3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product">
                            <a class="card" href="https://code-basics.com/ru/languages/java">
                                <div class="imageJava">
                                    <img src="img/java.png" alt="Java">
                                </div>

                                <div class="info">
                                    <h2>Java</h2>

                                    <div class="info-price">
                                        <span class="duration"><i class="fa-regular fa-clock"></i>23 часа</span>
                                        <span class="views"><i class="fa-regular fa-user"></i>22043</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product">
                            <a class="card"  href="https://code-basics.com/ru/languages/javascript">
                            <div class="imageJavaScript">
                                <img src="img/javascript.png" alt="JavaScript">
                            </div>

                            <div class="info">
                                <h2>JavaScript</h2>

                                <div class="info-price">
                                    <span class="duration"><i class="fa-regular fa-clock"></i>25 часов</span>
                                    <span class="views"><i class="fa-regular fa-user"></i>68663</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="product">
                            <a class="card"  href="https://code-basics.com/ru/languages/php">
                            <div class="imagePhp">
                                <img src="img/php.png" alt="PHP">
                            </div>

                            <div class="info">
                                <h2>PHP</h2>

                                <div class="info-price">
                                    <span class="duration"><i class="fa-regular fa-clock"></i>22 часа</span>
                                    <span class="views"><i class="fa-regular fa-user"></i>22546</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="product">
                            <a class="card"  href="https://code-basics.com/ru/languages/html">
                            <div class="imageHtml">
                                <img src="img/html.png" alt="HTML">
                            </div>

                            <div class="info">
                                <h2>HTML</h2>

                                <div class="info-price">
                                    <span class="duration"><i class="fa-regular fa-clock"></i>11 часов</span>
                                    <span class="views"><i class="fa-regular fa-user"></i>54372</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div id="box" class="box"></div>
                    <script>
                        var hiddenElement = document.getElementById("box");
                        var btn = document.querySelector('.button');
                        function handleButtonClick() {
                            hiddenElement.scrollIntoView({block: "center", behavior: "smooth"});
                        }
                        btn.addEventListener('click', handleButtonClick);
                    </script>
                    <br>
                    <div class="col-md-4">
                        <div class="product">
                            <a class="card"  href="https://code-basics.com/ru/languages/css">
                            <div class="imageCss">
                                <img src="img/css.png" alt="CSS">
                            </div>

                            <div class="info">
                                <h2>CSS</h2>

                                <div class="info-price">
                                    <span class="duration"><i class="fa-regular fa-clock"></i>8 часов</span>
                                    <span class="views"><i class="fa-regular fa-user"></i>29501</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="product">
                            <a class="card"  href="https://code-basics.com/ru/languages/python">
                            <div class="imagePython">
                                <img src="img/python.png" alt="Python">
                            </div>

                            <div class="info">
                                <h2>Python</h2>

                                <div class="info-price">
                                    <span class="duration"><i class="fa-regular fa-clock"></i>24 часа</span>
                                    <span class="views"><i class="fa-regular fa-user"></i>27235</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="product">
                            <a class="card"  href="https://code-basics.com/ru/languages/csharp">
                            <div class="imageCsharp">
                                <img src="img/csharp.png" alt="C#">
                            </div>

                            <div class="info">
                                <h2>C#</h2>

                                <div class="info-price">
                                    <span class="duration"><i class="fa-regular fa-clock"></i>16 часов</span>
                                    <span class="views"><i class="fa-regular fa-user"></i>6412</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="product">
                            <a class="card"  href="https://code-basics.com/ru/languages/clang">
                            <div class="imageClang">
                                <img src="img/clang.png" alt="C+">
                            </div>

                            <div class="info">
                                <h2>C</h2>

                                <div class="info-price">
                                    <span class="duration"><i class="fa-regular fa-clock"></i>1 час</span>
                                    <span class="views"><i class="fa-regular fa-user"></i>3544</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
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
                                <p class="accountText"><?php echo $_SESSION['login'];?>. Личный кабинет в разработке</p>
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