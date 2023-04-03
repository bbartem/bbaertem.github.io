<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];

$sql = "UPDATE products SET name='$name', description='$description', image='$image', price='$price' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Product updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br><button onclick="location.href='index.php'">Go to Product List</button>

