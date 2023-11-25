<?
require_once('db.php');
$_SESSION['authorized'] = null;

header('Location: /');
exit();