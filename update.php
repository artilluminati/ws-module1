<?php
require("db.php");

if (!checkadmin()){
    header("Location: /");
    exit;
}

$status = htmlspecialchars($_POST['status']);

$id = $_GET['id'];

// var_dump($status);
// var_dump($id);

$target_dir = "uploads/";
$name='myfile_'.date('m-d-Y_hia').
$start_target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($start_target_file,PATHINFO_EXTENSION));

$target_file = $target_dir . $name .".". $imageFileType;

$uploadOk = 1;


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    header("Location: /groom.php?out=Файл не является изображением.");
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    header("Location: /groom.php?out=Файл с таким названием уже существует");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  header("Location: /groom.php?out=Ваше изображение должно быть размером менее 2Мб");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "bmp" && $imageFileType != "jpeg") {
    
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  header("Location: /groom.php?out=Разрешены изображения только форматов JPG, BMP");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    if ($status === 'processing' or $status === 'new') {
        $q = "UPDATE `requests` SET `status`='$status' WHERE `id` = '$id'";
        
        mysqli_query($connect, $q);

        header("Location: /groom.php?out=Данные обновлены, новый файл не загружен.");
        exit();
    }
    header("Location: /groom.php?out=Извините, файл не загружен.");


// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $q = "UPDATE `requests` SET `img1`='$target_file',`status`='$status' WHERE `id` = '$id'";
    
    mysqli_query($connect, $q);
    
    header("Location: /groom.php?out=Файл ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " загружен.<br>Данные заявки обновлены.");
  } else {
    header("Location: /groom.php?out=Извините, произошла ошибка.");
  }
}