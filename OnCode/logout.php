<?php
session_start();

define ('BASE_URL' , '../index.php');

unset($_SESSION['id']);
unset($_SESSION['login']);

header('location: ' . BASE_URL);