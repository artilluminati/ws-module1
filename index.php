<?php require_once("db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1">
    <title>Document</title>

    <?php require_once("links.php");?>
</head>
<body>
    <?php require('nav.php'); 
    $q = 'SELECT * FROM requests ORDER BY id DESC LIMIT 4';

    $data = mysqli_query($connect, $q);
    // var_dump($data);
    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);
    
    // var_dump($data);
    ?>

    <header class="col-2 container">
        <div>
            <img src="images/photoshop/1 (2).png" alt="">
        </div>
        <div>
            <h1>Роскошный<br>
                груминг<br>
                от 1900 ₽<br>
            </h1>
            <h3>
                Стрижка + уход за шерстью
            </h3>
            <a href="index.php#register" class="btn">
                Зарегистрироваться
            </a>
        </div>
    </header>

    <section class="container photos">
        <h1 class="text-center">Последние преображения питомцев</h1>
        <div class="cards col-2">
            <?php foreach($data as $row){
                ?>
                <div class="card">
                    <img src="<?php echo $row['img1'] ?>" alt="">
                    <span><?php echo $row['name'] ?></span>
                </div>
            <?php }; ?>
        </div>
    </section>
    
    <a name="register"></a>
    <section class="col-2 container" style="margin-bottom: 60px;">
        <div style="display: flex; flex-direction: column;">
            <h2 class="text-right">
                <span class="text-blue">Зарегистрируйтесь</span>,<br>
                <p>чтобы оставить</p> 
                <p class="text-purple">заявку</p>
            </h2>
            <h3 class="text-right" style="margin-top: 36px;">Или <span class="text-blue" onclick="hideReg()" style="cursor: pointer;">войдите</span> в аккаунт</h3>
        </div>
        <div>
            <form id="reg-form" action="register.php" method="post" class="reg-form">
                
                <?php $register_err = htmlspecialchars($_GET["regerror"]);
                    var_dump($register_err);
                    if(isset($register_err)){
                        echo '<span>'.$register_err.'</span>';
                    }
                ?>
                <input type="text" name="fio" id="reg-fio" placeholder="ФИО">
                <input type="text" name="login" id="reg-login" placeholder="Логин">
                <input type="email" name="email" id="reg-email" placeholder="E-mail">
                <input type="password" name="pass" id="reg-pass" placeholder="Пароль">
                <input type="password" name="pass-accept" id="reg-pass-accept" placeholder="Повтор пароля">
                <label class="checkbox">Согласие на обработку персональных данных
                    <input type="checkbox" name="checkbox-data" value="checked">
                    <span class="checkmark"></span>
                </label>
                <input type="submit" value="Зарегистрироваться" class="btn">
                <a class="text-center reg-to-log" width="100%" onclick="hideReg()">У меня уже есть аккаунт</a>
            </form>

            <form class="hidden reg-form" id="log-form" action="" method="post">
                <input type="text" name="login" id="log-login" placeholder="Логин">
                <input type="password" name="pass" id="log-pass" placeholder="Пароль">
                <input type="submit" value="Зарегистрироваться" class="btn">
                <a class="text-center reg-to-log" width="100%" onclick="hideLog()">Создать аккаунт</a>
            </form>
            
        </div>
    </section>


    <?php require('footer.php');?>
</body>
</html>