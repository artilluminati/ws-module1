<?php
require("db.php");

$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$pass_accept = md5($_POST['pass-accept']);
$checkbox = $_POST['checkbox-data'];

// 

$logins = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

// var_dump(mysqli_num_rows($logins));

if (mysqli_num_rows($logins) > 0) {
    header('Location: index.php?regerror=Данный логин занят#register');
    exit();
}

if ($checkbox != 'checked') {
    // header('Location: index.php?regerror='.$checkbox.'#register');
    header('Location: index.php?regerror=Отсутсвует согласие на обработку данных#register');
    //exit();
} elseif (!isset($pass) or ($pass !== $pass_accept)) {
    header('Location: index.php?regerror=Пароли не совпадают#register');

} elseif (!isset($fio) or !preg_match('/^[а-яёА-ЯЁ\s]+$/u', $fio)) {
    header('Location: index.php?regerror=Ошибка в ФИО#register');
} elseif (!isset($email) or !preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $email)) {
    header('Location: index.php?regerror=Ошибка в адресе e-mail#register');
} else{
    $q = "INSERT INTO `users` (`id`, `login`, `password`, `email`, `fio`) VALUES (NULL, '$login', '$pass', '$email', '$fio')";
    mysqli_query($connect, $q);
    
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);

    $logins = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    $logins = mysqli_fetch_assoc($logins);

    $_SESSION['authorized'] = true;
    $_SESSION['login'] = $login;
    $_SESSION['fio'] = $logins['fio'];
    $_SESSION['uid'] = $logins['id'];

    header('Location: index.php?regerror=Успешная регистрация#register');
    exit();
}