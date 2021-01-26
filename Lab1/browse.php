<!doctype html>

<html lang="en">
<head>

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

<form action="">
  <label for="author">Author:</label><br>
  <input type="text" id="author" name="author" value=""><br>
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" value=""><br><br>
  <input type="submit" value="Search">
</form> 

<div class="chosen">
    <h1> Chosen books </h1>
    <ul>
        <li>Head First PHP & MySQL, A Brain-Friendly Guide <input type="submit" value="Reserve"></li>
        <li>Learning PHP, MySQL & JavaScript (4th Edition) <input type="submit" value="Reserve"></li>
        <li>PHP 7 - for building interactive websites (In easy steps) <input type="submit" value="Reserve"></li>
    </ul>
</div>

</div>

</body>
</html>