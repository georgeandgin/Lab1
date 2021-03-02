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

    <form method="post"> 
          <input type="submit" name="newPic"
                  value="newPic" onclick='window.location.reload(true);'/> 
    </form>
    
    <div id="gallery">

    <?php
    
    /*$curl = curl_init();

    curl_setopt_array($curl,[
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => "https://picsum.photos/200/300?grayscale"
    ]);

    $response = curl_exec($curl);

    echo $response;
    
    curl_close($curl);

    */?>
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

    <?php
    if(isset($_POST['newPic'])) { 
      echo "<img class='display' src='https://picsum.photos/200/300?grayscale'";
      /*$curl = curl_init();

      curl_setopt_array($curl,[
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => "https://picsum.photos/200/300?grayscale"
      ]);

      $response = curl_exec($curl);

      echo $response;
    
      curl_close($curl);*/
    } 
    //echo "<img src='https://picsum.photos/200/300?grayscale'"
    ?>
    <?php
      
      /*if(isset($_POST['addPic'])) { 
        $url = "https://picsum.photos/200/300?grayscale";
        $data = json_decode(file_get_contents($url), true);
        echo "addedPic: ", $data;
        echo '<br>'; 
      }

      if(isset($_POST['addPic'])) { 

        echo "<img src='https://picsum.photos/200/300?grayscale'";
      }*/
  ?> 


    </div>
</div>


</body>

<script>

</script>

<?php include ('footer.php');?>

</html>