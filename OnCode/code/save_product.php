<?php
include 'config.php';

$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, description, image, price) VALUES ('$name', '$description', '$image', '$price')";

if (mysqli_query($conn, $sql)) {
    echo "Product added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br><br><button onclick="location.href='index.php'">Back</button>