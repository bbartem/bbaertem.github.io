<?php
include '../app/database/db.php';
?>
<?php
include 'config.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>OnCode</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/style2.css">
    <link rel="stylesheet" type="text/css" href="../style/index.css">
    <link rel="stylesheet" type="text/css" href="../style/card.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link href="modal.html">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="index.php"><img class="logo" src="../img/Logo/logo2.svg" alt="Упс..."></a>
    </div>
    <nav>
        <a href="../index.php">ГЛАВНАЯ</a>

        <?php if (isset($_SESSION['id'])):?>
            <a class="aaccount, point" href="#zatemnenie">ЛИЧНЫЙ КАБИНЕТ</a>
            <a href = "../logout.php">ВЫХОД</a>
        <?php else: ?>
            <a href="../login.php">ВХОД</a>
            <a href="../registration.php">РЕГИСТРАЦИЯ</a>
        <?php endif; ?>
        <div id="zatemnenie">
            <div id="okno">
                <p class="accountText">Добро пожаловать! <?php echo $_SESSION['login'];?>. Личный кабинет в разработке</p>
                <a href="/code/index.php">Страница редактирования карточек</a><br>
                <a href="#" class="close"><i class="fa-solid fa-xmark"></i></i></a>
            </div>
        </div>
    </nav>
    <div class="content">
    <div class="container_card">
        <div class="card-container">
            <?php while ($product = mysqli_fetch_assoc($result)) { ?>
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h2><?php echo $product['name']; ?></h2>
                    <p><?php echo $product['description']; ?></p>
                    <h3>$<?php echo $product['price']; ?></h3>
                    <div class="actions">
                        <a href="edit_product.php?id=<?php echo $product['id']; ?>">Edit</a>
                        <a href="delete_product.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <div class="actions">
        <a href="add_product.php">Add Product</a>
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
                    <a class="navFooter" href="../index.php">ГЛАВНАЯ</a>
                    <a class="navFooter" href="../aboutUs.php">О НАС</a>
                    <a class="navFooter" href="../contacts.php">КОНТАКТЫ</a>
                    <?php if (isset($_SESSION['id'])):?>
                        <a class="aaccount" href="#zatemnenie">ЛИЧНЫЙ КАБИНЕТ</a>
                        <a href = "../logout.php">ВЫХОД</a>
                    <?php else: ?>
                        <a href="../login.php">ВХОД</a>
                        <a href="../registration.php">РЕГИСТРАЦИЯ</a>
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
