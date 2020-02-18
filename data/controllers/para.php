<?php
session_start();
$_SESSION['one']['picture'] = $_POST['pictureI'];
$_SESSION['one']['text'] = $_POST['textI'];
$_SESSION['two']['picture'] = $_POST['pictureO'];
$_SESSION['two']['text'] = $_POST['textO'];
header('Location: /');
