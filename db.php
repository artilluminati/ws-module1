<?

$connect = mysqli_connect('localhost','root','','ws-module1');
session_start();

if(!$connect){
    echo 'DB connection error';
}