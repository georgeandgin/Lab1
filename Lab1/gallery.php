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
  <style>
    * {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
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