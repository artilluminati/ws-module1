<?

$connect = mysqli_connect('localhost','root','','ws-module1');
session_start();

if(!$connect){
    echo 'DB connection error';
}

function checkadmin(){
    if (md5($_SESSION['login']) === '21232f297a57a5a743894a0e4a801fc3' and $_SESSION['authorized']){
        return true;
    } else {
        return false;
    }
}