<!doctype html>

<html lang="en">
<head>
  <?php include ('config.php');?>
  <?php include ('connect.php');?>

  <meta charset="utf-8">

  <title>Lab1</title>

  <link rel="stylesheet" href="css/output.css">


  <style>
  #gallery { 
    display: flex;
    flex-wrap: wrap;
    padding: 0 5%;
  }

  .display {
    padding: 10px;
    width: 300px;
    height: 300px;
    vertical-align: middle;
    filter: grayscale(100%);
  }
  </style>


</head>

<body>

<?php include ('header.php');?>


  <div class="main">
  <h2 style="margin:5%"> Your secret image uploads...</h2>
    <div id="gallery">
      <?php

        $query = "SELECT fileName from GalleryImages";

        $stmt = $db->prepare($query);
        $stmt->bind_result($fileName);
        $stmt->execute();

        while ($stmt->fetch()) {
          echo "<img class='display' src='gallery/" . $fileName . "'/>";
        }

        $stmt->close();

       ?>
    </div>
</div>

<!-- Container for the image gallery -->

</body>

<script>

</script>

<?php include ('footer.php');?>

</html>