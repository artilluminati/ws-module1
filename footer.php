<footer>
        <nav class="container">
            <a class="logo">
                <img src="images/логотипы/logo5.png" alt="">
            </a>
            <div class="nav-menu">
            <a href="index.php">Главная</a>
            
            <?php if ($_SESSION['authorized'] == true){?>
            <a href="user.php">Онлайн запись</a>
            <a href="logout.php" class="nav-login">
                <span>    
                Выход
                </span>
                <img src="images/photoshop/Group 35.svg" alt="">
                <div class="nav-login-hidden">

                </div>
            </a>
            <?php } else { ?>
            <a href="index.php#register" onclick="hideLog()">Онлайн запись</a>
            <a href="index.php#register" class="nav-login" onclick="hideReg()">
                <span>    
                Войти
                </span>
                <img src="images/photoshop/Group 35.svg" alt="">
                <div class="nav-login-hidden">

                </div>
            </a>

            <?php } ?>
            </div>
        </nav>
        <div class="container info">
            <a href="https://yandex.ru/maps/-/CDesZ0~Y">г. Казань, ул. Пушкина, 9</a>
            <a href="tel:88009293943243">8 800 929 394-32-43</a>
            <a href="mailto:mail@mail.ru">mail@mail.ru</a>
        </div>
    </footer>

    <?php require_once("scripts.php");?>