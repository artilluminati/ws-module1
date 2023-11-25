<nav class="container col-2">
        <a class="logo" href="index.php">
            <img src="images/логотипы/logo5.png" alt="">
        </a>
        <div class="burger-container" onclick="openMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        <div class="nav-menu nav-menu1 hidden-nav" id="nav1">
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