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
    <?php require('nav.php'); ?>

    <section class="container my-requests col-2">
        <div class="req-cards">
            <h2>Мои заявки</h2>
            <form class="card">
                <img src="images/животные/2 (1).jpg" alt="">
                <div>
                    <div>
                        <span>Бобик</span>
                        <select name="status" id="">
                            <option value="new">Новая</option>
                            <option value="processing">Обработка данных</option>
                            <option value="completed">Услуга оказана</option>
                        </select>
                    </div>
                    <div class="text-purple">Удалить</div>
                </div>
                
            </form>
        </div>
        <div>
            <h2>Создание заявки</h2>
            <form action="" class="req-new" method="post">
                <label for="req-new-img" class="form-img">
                    <div>
                        <p>
                            Загрузите фото питомца
                        </p>
                        
                        <p>
                            фото в формате .jpeg или .bmp размером до 2 Мб
                        </p>
                        <input type="file" id="req-new-img" class="hidden"src="" alt="">
                    </div>
                    
                </label>
                
                <input type="text" name="" id="" placeholder="Кличка животного">
                <input type="submit" class="btn" value="Отправить">
            </form>
        </div>
        
    </section>

    <section class="container">
        <a class="btn" href="groom.php">Перейти в админ-панель</a>
    </section>
    


    <?php require('footer.php');?>
</body>
</html>