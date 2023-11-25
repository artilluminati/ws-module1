<?php
require("db.php");


$login = $_POST['login'];
$pass = md5($_POST['pass']);

$logins = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
$logins = mysqli_fetch_assoc($logins);

if($logins['password'] == $pass){
    $_SESSION['authorized'] = true;
    $_SESSION['login'] = $login;
    $_SESSION['fio'] = $logins['fio'];
    $_SESSION['uid'] = $logins['id'];
};

header('Location: /?logerror=Успешная авторизация#register');