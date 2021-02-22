<?php

include 'connect.php';
include 'config.php';

$target_dir = "../images/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Checking image file
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

//Checking if file exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Checking the file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


// Whitelisting file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}


// If uploadOK is 1 save the file
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";


    //save the directory in the database
    $query = "INSERT INTO uploads (fileName, fileType, fileSize) VALUES (?, ?, ?)";

    echo "<br> The query: " . $query;

    $stmt = $db->prepare($query);
    $stmt->bind_param("ssi", $_FILES["fileToUpload"]["name"], $imageFileType, $_FILES["fileToUpload"]["size"]);
    $stmt->execute();


    $stmt->close();

    header("Location: ../gallery.php");


  } else {
    echo "Sorry, there was an error uploading your file.";
    header("Location: ../admin.php");
  }
}

?>