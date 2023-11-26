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

    $q = 'SELECT * FROM requests ORDER BY id DESC';

    $data = mysqli_query($connect, $q);

    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);

    ?>

    <?php require('modal.php');?>

    <div class="content">
    

    <section class="container admin">
        <h2 class="text-center">Панель администратора</h2>

        <?php

        $out = $_GET['out'];
        if(isset($out)){
                        echo '<span class="text-purple">'.$out.'</span>';
                    }?>


        <?php foreach($data as $row){ 
            $cur_uid = $row['uid'];
            $cur_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `id` = '$cur_uid'");
            $cur_user = mysqli_fetch_all($cur_user, MYSQLI_ASSOC)[0];
            ?>


        <form action="update.php?id=<?php echo $row['id'] ?>" class="card" method="POST" enctype="multipart/form-data">
            <div>
                <img src="<?php echo $row['img1'] ?>" alt="">
            </div>
            <div style="display: flex; flex-direction: column; justify-content: space-between;">
                <div style="display: flex; flex-direction: column; font-size: 1.5rem;">
                    <span><?php echo $row['name'] ?></span>
                    <select name="status" id="req-admin-select-<?php echo $row['id'] ?>">
                        <option value="new" <?php if ($row['status'] == 'new'){ echo 'selected';}; ?>>Новая</option>
                        <option value="processing" <?php if ($row['status'] == 'processing'){ echo 'selected';}; ?>>Обработка данных</option>
                        <option value="completed" <?php if ($row['status'] == 'completed'){ echo 'selected';}; ?>>Услуга оказана</option>
                    </select>
                </div>
                <a class="text-purple" style="text-decoration: none; cursor: pointer;" onclick="trigger(<?php echo $row['id'] ?>+'&from=groom')">Удалить</a>
            </div>
            <div>
                <label for="req-admin-img-<?php echo $row['id'] ?>" class="form-img">
                    <div>
                        <p>
                            Загрузите фото питомца
                        </p>
                        
                        <p>
                            фото в формате .jpeg или .bmp размером до 2 Мб
                        </p>
                    </div>
                    
                </label>
            </div>
            <div style="display: flex; flex-direction: column; justify-content: space-between;">
                <span><?php echo $cur_user['fio'] ?></span>
                <span><?php echo $cur_user['email'] ?></span>
                <span><?php echo $cur_user['login'] ?></span>
                <input type="file" id="req-admin-img-<?php echo $row['id'] ?>" class="form-img-input" name="fileToUpload">
                <input type="submit" class="btn" value="Обновить">
            </div>
        </form>


        <?php }; ?>
    </section>
    
    </div>

    <?php require('footer.php');?>
</body>
</html>
