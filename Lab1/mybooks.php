<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Lab1</title>

  <link rel="stylesheet" href="css/output.css">

  <?php include ('config.php');?>
  <?php include ('connect.php');?>

</head>

<body>

<?php include ('header.php');?>

<div class="container">
    <h1> In your possession currently </h1>
    <ul classs="middle">
        <li>Head First PHP & MySQL, A Brain-Friendly Guide <button class="remove">&#10006;</button> </li>
        <li>Learning PHP, MySQL & JavaScript (4th Edition) <button class="remove">&#10006;</button> </li>
        <li>PHP 7 - for building interactive websites (In easy steps) <button class="remove">&#10006;</button> </li>
    </ul>
</div>

<?php
      $query = "SELECT c.relationshipID, c.AuthorID, c.ISBN, d.Title, d.NoCopies, 
      d.PubYear, d.NoPages,
      GROUP_CONCAT(' ', a.firstName, ' ', a.lastName) AS Authors
      FROM AuthorBook c INNER JOIN Author a 
      ON c.AuthorID = a.AuthorID INNER JOIN MyBooks d ON c.ISBN = d.ISBN
      GROUP BY c.ISBN";
      $stmt;
      $stmt = $db->prepare($query);
      $stmt->bind_result($relationshipID, $AuthorID, $ISBN, $Title, $NoCopies, $PubYear, $NoPages, $Authors);
      $stmt->execute();

      echo "<ul>";
      
      while ($stmt->fetch()){
        if ($NoCopies > 0){
        echo "<li> <b> $Title </b><i>published $PubYear with $NoPages pages by $Authors</i>
        - You have $NoCopies reserved. <form action='unreserve.php' method='POST'>
        <input type='hidden' name='ISBN' value='$ISBN'>
        <button class='remove' type='submit' onclick='mybooks.php''>&#10006;</button></form></li>";
        echo "<br>";
        echo "<br>";
        }
      }

      echo "</ul>";

      $stmt->close();

    ?>

</body>

<?php include ('footer.php');?>

</html>