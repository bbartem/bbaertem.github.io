<!DOCTYPE html>
<html>
<head>
    <title>OnCode</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de9c951651.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="index.php"><img class="logo" src="../img/Logo/logo2.svg" alt="Упс..."></a>
    </div>
    <div class="content">
    <div class="content2">
        <h1>Создание курса</h1>
        <form method="post" action="save_product.php">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description"><?php echo $product['description']; ?></textarea>

            <label for="image">Image URL:</label>
            <input type="text" id="image" name="image" value="<?php echo $product['image']; ?>">

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="<?php echo $product['price']; ?>" required>

            <input type="submit" value="Save">
        </form>
    </div>
    </div>
    <div class="clear">
    </div>
    <footer>
        <div class="footer">
            <div class="row2">
                <div class="colFooter col1">
                    <p class="textFooter">OnCode</p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
