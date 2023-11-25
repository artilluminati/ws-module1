<?php require_once("db.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require_once("links.php");?>
</head>
<body>
    <?php require('nav.php'); 
    
    if (!checkadmin()){
        echo '<div style="margin-top: 30px" class="container"><span>У вас нет доступа к этой странице. </span><a class="text-purple" href="/">Вернуться.</a></div>';
        exit;
    }
    ?>
    

    <section class="container admin">
        <h2 class="text-center">Панель администратора</h2>
        <form action="" class="card">
            <div>
                <img src="images/животные/3 (1).jpg" alt="">
            </div>
            <div>
                <div style="display: flex; flex-direction: column;">
                    <span>Бобик</span>
                    <select name="status" id="">
                        <option value="new">Новая</option>
                        <option value="processing">Обработка данных</option>
                        <option value="completed">Услуга оказана</option>
                    </select>
                </div>
                <div>Удалить</div>
            </div>
            <div>
                <label for="req-admin-img" class="form-img">
                    <div>
                        <p>
                            Загрузите фото питомца
                        </p>
                        
                        <p>
                            фото в формате .jpeg или .bmp размером до 2 Мб
                        </p>
                        <input type="file" id="req-admin-img" class="hidden" src="" alt="">
                    </div>
                    
                </label>
            </div>
            <div>
                <span>ФИО</span>
                <span>user@mail.ru</span>
                <span>user</span>
                <input type="submit" class="btn" value="Обновить">
            </div>
        </form>
    </section>
    


    <?php require('footer.php');?>
</body>
</html>
