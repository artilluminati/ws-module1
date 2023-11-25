<?php
require('db.php');

$id = $_GET["id"];
$uid = $_SESSION['uid'];
var_dump($uid);

$realuid = mysqli_query($connect,"SELECT * FROM `requests` WHERE 'id' = '$id'");
$realuid = mysqli_fetch_assoc($realuid);
var_dump($realuid);