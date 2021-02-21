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

<form action="loginfunctionality.php" method="POST">
  <label for="username">Username</label><br>
  <input type="text" id="username" name="username" value=""><br>
  <label for="title">Password</label><br>
  <input type="text" id="password" name="password" value=""><br><br>
  <input type="submit" name="submit" value="Login">
</form> 

</div>

</body>

<?php include ('footer.php');?>

</html>