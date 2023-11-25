<?php
$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass_accept = $_POST['pass-accept'];
$checkbox = $_POST['checkbox-data'];

// or $checkbox != 'checked'

if (isset($checkbox)) {
    // var_dump($checkbox);
    //header('Location: index.php?regerror=Отсутсвует согласие на обработку данных#register');
    //exit();
} elseif (isset($pass) or ($pass !== $pass_accept)) {
    header('Location: index.php?regerror=Пароли%20не%20совпадают#register');
    exit();
}
elseif (isset($fio) or preg_match('/^[а-яёА-ЯЁ\s]+$/u', $fio)) {
    header('Location: index.php?regerror=Ошибка в ФИО#register');
    exit();
}
elseif (isset($email) or preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $email)) {
    header('Location: index.php?regerror=Ошибка в адресе e-mail#register');
    exit();
}
else{
    header('Location: index.php#register');
    exit();
}



$q = '';