<?php
require('db.php');

$id = $_GET["id"];
$uid = $_SESSION['uid'];



$data = mysqli_query($connect,"SELECT * FROM `requests` WHERE `id` = '$id'");


$data = mysqli_fetch_assoc($data);
$realuid = $data['uid'];
$status = $data['status'];

$userrole = mysqli_query($connect,"SELECT `role` FROM `users` WHERE `id` = '$uid'");
$userrole = mysqli_fetch_assoc($userrole)['role'];

if (($realuid === $uid and $status === 'new') or ($userrole === 'admin' and $_GET['from'] === 'groom')) {
    mysqli_query($connect,"DELETE FROM `requests` WHERE `id` = '$id'");
}

if (isset($_GET['from'])) {
    header("Location: ".$_GET['from'].".php");
} else{
    header("Location: user.php");
}
