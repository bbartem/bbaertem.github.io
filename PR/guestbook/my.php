<?php
session_start();
$_SESSION['name'];
$_SESSION['age'];
$_SESSION['email'];
if(@$_REQUEST['go_exit']){
    session_destroy();
    unset($_SESSION['name']);
    unset($_SESSION['age']);
    unset($_SESSION['email']);
    Header("Location:index.html");
}

echo '<DOCTYPE html>
<html>
<head>
<style>
body{
    background-color:#F5DEB3;
    font:italic 170%;
    font-family:Monotype Corsiva;
    margin: 0 0 15px 0;
    padding: 15px 0 5px 0;
    color:#b22222;
    margin:14px 100px 14px 550px;
    font-size: 25px;
}
     
input{
    color:#B22222;
    width:8%;
    padding:8px;
    margin:0 20px;
    font-family:Monotype Corsiva;
    font-size: 20px;
    
}
p{
    margin:10px -100px;
}
</style>
</head>
<body>
Привет '.$_SESSION['name'].'
<br><p>Ваш комментарий важен для нас!</p><br>
<form method="POST">
<input type="submit" name="go_exit" value ="Выйти">
</form>
</body>
</html>';

?>