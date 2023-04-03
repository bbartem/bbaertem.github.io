<?php
session_start();

define ('BASE_URL' , 'http://o92867ev.beget.tech/index.php');

unset($_SESSION['id']);
unset($_SESSION['login']);

header('location: ' . BASE_URL);