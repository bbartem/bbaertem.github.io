<?php
$connect=mysqli_connect('127.0.0.1', 'root', '', 'MyDBDB');
if(mysqli_connect_errno()){
    printf('Не удалось подключиться: %s\n', mysqli_connect_error());
    exit();
};
session_start();
$_SESSION['name'];
$_SESSION['age'];
$_SESSION['email'];
if(@$_REQUEST['go_reg']){
    $name=$_POST['name'];
    $name=strip_tags($name);
    $name=HtmlSpecialChars($name);
    $name=trim($name);

$age=$_POST['age'];
$age=strip_tags($age);
$age=HtmlSpecialChars($age);
$age=trim($age);

$email=$_POST['email'];
$email=strip_tags($email);
$email=HtmlSpecialChars($email);
$email=trim($email);

$comment=$_POST['comment'];
$comment=strip_tags($comment);
$comment=HtmlSpecialChars($comment);
$comment=trim($comment);

if($name==""||$age==""||$email==""||$comment=="")
{
    echo '<script>
    alert ("Не все поля заполнены!");
    window.location.href="index.html";
    </script>';
}
else{
    $date=date("Y-m-d H:i:s");
    $query="INSERT INTO questSET date = '$date', name = '$name', age='$age', email='$email', comment='$comment'";

    mysqli_query($connect,$query);
    $_SESSION['name']=$name;
    $_SESSION['age']=$age;
    $_SESSION['email']=$email;
    mysqli_close($connect);
    Header("Location:my.php");
}
}
?>