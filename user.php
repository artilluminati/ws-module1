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

    require_once('checklogin.php');

    $uid = $_SESSION['uid'];
    $q = "SELECT * FROM requests WHERE `uid` = '$uid'";

    $data = mysqli_query($connect, $q);

    $data = mysqli_fetch_all($data, MYSQLI_ASSOC);

    $status_dict = [
        "new"=> "Новая",
        "processing"=> "В обработке",
        "completed"=> "Услуга оказана"
    ]

    ?>


    <?php require("modal.php");?>

    <div class="content">
    <section class="container my-requests col-2">
        <div class="req-cards">
            <h2>Мои заявки</h2>
            <?php foreach($data as $key => $row){ ?>
            <form class="card">
                <img src="<?php echo $row['img1'] ?>" alt="">
                <div>
                    <div class="card-info">
                        <span><?php echo $row['name']?></span>
                        <span class="text-blue"><?php echo $status_dict[$row['status']] ?></span>
                    </div>
                    <a class="text-purple trigger" style="cursor: pointer;" onclick="trigger(<?php echo $row['id'] ?>)">Удалить</a>
                    <!-- href="delete.php?id=<?php //echo $row['id'] ?>" -->
                </div>
            </form>
            <?php }; ?>
            <?php if (!(array)$data){
                echo '<p>
                У вас ещё нет заявок.
                </p>';
            }
            ?>
        </div>
        <div>
            <h2>Создание заявки</h2>
            <form action="upload.php" class="req-new" method="post" enctype="multipart/form-data">
                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                <label for="req-new-img" class="form-img">
                    <div>
                        <p>
                            Загрузите фото питомца
                        </p>
                        
                        <p>
                            фото в формате .jpeg или .bmp размером до 2 Мб
                        </p>
                        
                    </div>
                </label>
                <input type="file" name="fileToUpload" id="req-new-img">
                <input type="text" name="name" placeholder="Кличка животного">
                <input type="submit" class="btn" value="Отправить">
                <?php $out = htmlspecialchars($_GET["out"]);
                    // var_dump($register_err);
                    if(isset($out)){
                        echo '<span class="text-purple">'.$out.'</span>';
                    }
                ?>
            </form>

            
        </div>
        
    </section>

    

    <?php if (checkadmin()){?>

    <section class="container">
        <a class="btn" href="groom.php">Перейти в админ-панель</a>
    </section>
    <?php }; ?>

    </div>
    <?php
    require('footer.php');?>
</body>
</html>