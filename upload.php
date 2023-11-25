<?php 
require("db.php");

$name = $_POST['name'];
$uid = $_SESSION['uid'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    header("Location: /user.php?out=Файл не является изображением.");
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    header("Location: /user.php?out=Файл с таким названием уже существует");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  header("Location: /user.php?out=Ваше изображение должно быть размером менее 2Мб");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "bmp" && $imageFileType != "jpeg") {
    
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
header("Location: /user.php?out=Разрешены изображения только форматов JPG, BMP");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location: /user.php?out=Извините, файл не загружен.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    $q = "INSERT INTO `requests` (`id`, `uid`, `name`, `img1`, `status`) VALUES (NULL, '$uid', '$name', '$target_file', 'new')";
    
    mysqli_query($connect, $q);
    
    header("Location: /user.php?out=Файл ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " загружен.");
  } else {
    header("Location: /user.php?out=Извините, произошла ошибка.");
  }
}