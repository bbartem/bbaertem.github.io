<?php
$servername = "localhost";
$username = "o92867ev_oncode";
$password = "1cOderoot";
$dbname = "o92867ev_oncode";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
