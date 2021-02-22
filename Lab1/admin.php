<!doctype html>

<html lang="en">
<head>
<?php include ('config.php');?>
<?php include ('connect.php');?>
<?php
    if($_SESSION["userType"]!=1)
    {
        header("Location: index.php");
    }
?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;1,400&display=swap" rel="stylesheet">  
  
<meta charset="utf-8">
  <title>Lab1</title>
  <meta name="" content="">
  <meta name="" content="">

  <link rel="stylesheet" href="css/output.css">

</head>
<body>
    <?php include "header.php"?>
    <header>
        <img id="cover" src="img/bookClub.jpeg"/>
        <img id="arrow" src="img/arrow.png"/>
        <h1>THIS IS THE ADMIN PAGE</h1>
    </header>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>

    </div>
    <?php include "footer.php"?>

</body>
</html>
