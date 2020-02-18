<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];

if (($_SESSION['name'] == 'Jon' || $_SESSION['name'] == 'jon' || $_SESSION['name'] == 'JOn' || $_SESSION['name'] == 'JON' || $_SESSION['name'] == 'jOn' || $_SESSION['name'] == 'jON' || $_SESSION['name'] == 'joN') && ($_SESSION['password'] == '1234')) {
    $_SESSION['userName'] = $_SESSION['name'];
    $_SESSION['one']['picture'] = 'yes';
    $_SESSION['one']['text'] = 'yes';
    $_SESSION['two']['picture'] = 'yes';
    $_SESSION['two']['text'] = 'yes';
    header('Location: /');
} else {
    header('Location: http://192.168.33.11/login.php');
}
