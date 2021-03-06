<!doctype html>

<html lang="en">
<head>
  <?php include ('config.php');?>
  <?php include ('connect.php');?>

  <meta charset="utf-8">

  <title>Lab1</title>

</head>

<body>

<?php include ('header.php');?>


<?php
$target_dir = "gallery/";
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

    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {

  echo "Sorry, file already exists.";
  $uploadOk = 0;

}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {

  echo "Too large, compress your file please.";
  $uploadOk = 0;

}

// Allow only jpg png jpeg and gif files to be uploaded to the website

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 and error handle if not
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

    //save the file into the database phpmyadmin thingy

    $query = "INSERT INTO GalleryImages (fileName, fileType, fileSize) VALUES (?, ?, ?)";
  
    echo "<br> The query: " . $query;

    $stmt = $db->prepare($query);
    $stmt->bind_param("ssi", $_FILES["fileToUpload"]["name"], $imageFileType, $_FILES["fileToUpload"]["size"]);
    $stmt->execute();


    $stmt->close();

    header("Location: gallery.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
    header("Location: admin.php");
  }
}

?>

</body>

<?php include ('footer.php');?>

</html>