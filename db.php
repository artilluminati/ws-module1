<?

$connect = mysqli_connect('localhost','root','','ws-module1');

if(!$connect){
    echo 'DB connection error';
}