<?php


if ($_POST['DB_USER'] != null && $_POST['DB_PASSWORD'] != null) {
    $login = htmlspecialchars($_POST['DB_USER']);//
    $password = htmlspecialchars($_POST['DB_PASSWORD']);//

    $password = md5($password . "SCP");


    $mysql = new mysqli('localhost', 'root', '', 'mysitelogin');//

    $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
    $mysql->close();
    $user = $result->fetch_assoc();


    if(count($user)!=0){

        setcookie('user',$user['name'],time()+3600,"/");

        header('Location: /main.html');
    }
    else{
        echo 'ne naiden';
        //header('Location: /error.html');
    }

}