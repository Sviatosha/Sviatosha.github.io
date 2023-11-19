<?php

if ($_POST['DB_USER'] != null && $_POST['DB_LOGIN'] != null && $_POST['DB_PASSWORD'] != null) {
    $user = htmlspecialchars($_POST['DB_USER']);//
    $login = htmlspecialchars($_POST['DB_LOGIN']);//
    $password = htmlspecialchars($_POST['DB_PASSWORD']);//

    $password = md5($password . "SCP");

    $mysql = new mysqli('localhost', 'root', '', 'mysitelogin');//
    $mysql->query("INSERT INTO `users` (`name`, `login`, `password`) VALUES ('$user','$login','$password')");
    $mysql->close();
    header('Location: /index.html');
}
else{
    header('Location: /error.html');
}