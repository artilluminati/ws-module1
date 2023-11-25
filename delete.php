<?php
require('db.php');

$id = $_GET["id"];
$uid = $_SESSION['uid'];

$data = mysqli_query($connect,"SELECT * FROM `requests` WHERE `id` = '$id'");


$data = mysqli_fetch_assoc($data);
$realuid = $data['uid'];
$status = $data['status'];


if ($realuid === $uid and $status === 'new') {
    mysqli_query($connect,"DELETE FROM `requests` WHERE `id` = '$id'");
}
header("Location: user.php");