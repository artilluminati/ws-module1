<?php
if(!$_SESSION['authorized']){
    echo '<div class="container"><span>У вас нет доступа к этой странице. </span><a class="text-purple" href="/">Вернуться.</a></div>';
    exit;
};