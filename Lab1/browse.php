<!doctype html>

<html lang="en">
<head>
<?php include ('config.php');?>
<?php include ('connect.php');?>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,800;1,400&display=swap" rel="stylesheet">  
  
    <meta charset="utf-8">
  <title>Lab1</title>
  <meta name="" content="">
  <meta name="" content="">

  <link rel="stylesheet" href="css/output.css">

</head>
<body>

<?php include ('header.php');?>


<div class="browse">



<div class="chosen">
    <h1> Choose books </h1>


    <?php
      $query = "SELECT c.relationshipID, c.AuthorID, c.ISBN, b.Title, b.NoCopies, 
      b.PubYear, b.NoPages,
      GROUP_CONCAT(' ', a.firstName, ' ', a.lastName) AS Authors
      FROM AuthorBook c INNER JOIN Author a 
      ON c.AuthorID = a.AuthorID INNER JOIN Book b ON c.ISBN = b.ISBN
      GROUP BY c.ISBN";

      $stmt = $db->prepare($query);
      $stmt->bind_result($relationshipID, $AuthorID, $ISBN, $Title, $NoCopies, $PubYear, $NoPages, $Authors);
      $stmt->execute();

      echo "<ul>";
      

      while ($stmt->fetch()){
        if ($NoCopies > 0){
          echo "<li> <b> $Title </b><i>published $PubYear with $NoPages pages by $Authors</i>
        - Only $NoCopies copies left! <form action='reserve.php' method='POST'>
        <input type='hidden' name='ISBN' value='$ISBN'>
        <button type='submit' onclick='mybooks.php''>Reserve</button></form></li>";
        echo "<br>";
        echo "<br>";
        }
      }

      echo "</ul>";

      $stmt->close();

    ?>


</div>

</div>

</body>

<?php include ('footer.php');?>

</html>