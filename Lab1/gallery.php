<!doctype html>

<html lang="en">
<head>
  <?php include ('config.php');?>
  <?php include ('connect.php');?>

  <meta charset="utf-8">

  <title>Lab1</title>

  <link rel="stylesheet" href="css/output.css">

</head>

<body>

<?php include ('header.php');?>

<header>
    <img id="cover" src="img/bookClub.jpeg"/>
    <img id="arrow" src="img/arrow.png"/>
  </header>
  <div class="main">

    <div id="gallery">
      <?php

        $query = "SELECT fileName from GalleryImages";

        $stmt = $db->prepare($query);
        $stmt->bind_result($fileName);
        $stmt->execute();

        while ($stmt->fetch()) {
          echo "<img src='img/GalleryImages/" . $fileName . "'/>";
        }

        $stmt->close();

       ?>
    </div>


  </div>

</body>

<?php include ('footer.php');?>

</html>