<?php
  include 'connect.php';
  include 'config.php';

  if($_SESSION["userType"]!=1)
  {
    header("Location: index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"?>
    <header>
        <img id="cover" src="images/library-image.jpg"/>
        <img id="arrow" src="images/arrow.png"/>
        <h1>THIS IS THE ADMIN PAGE</h1>
    </header>

    <div class="main">
    <h2>You have acess</h2>
    <p>
      Username:
      <?php echo $_SESSION["username"]?>

    </p>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>


    </div>
    <?php include "footer.php"?>

</body>
</html>
