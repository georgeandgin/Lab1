<?php
  include 'connect.php';
  include 'config.php';

?>



<html lang = "en">
<body>
<?php include "header.php"?>
  <header>
    <img id="cover" src="images/library-image.jpg"/>
    <img id="arrow" src="images/arrow.png"/>
    <h1> Look at these beautiful images</h1>
  </header>
  <div class="main">
    <h2>Gallery</h2>

    <div class="galleryflex">
      <?php

        $query = "SELECT fileName from uploads";


        $stmt = $db->prepare($query);
        $stmt->bind_result($fileName);
        $stmt->execute();

        while ($stmt->fetch()) {
          echo "<img src='images/uploads/" . $fileName . "'/>";
        }

        $stmt->close();

       ?>
    </div>






  </div>
  <?php include "footer.php"?>
</body>
</html>