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

<form action="" method="POST">
  <label for="username">Username</label><br>
  <input type="text" id="username" name="username" value=""><br>
  <label for="title">Password</label><br>
  <input type="text" id="password" name="password" value=""><br><br>
  <input type="submit" name="submit" value="Login">
</form> 


<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * from user WHERE username = '$username' AND password = '$password'"; 
        //$query = "SELECT * from users WHERE username = ? AND password = ?";

        echo"<br> The query: $query <br>";

        $stmt = $db->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        $stmt->bind_result($usr, $pw, $userType);
        $stmt->execute();

        echo '<br> <table style="margin-left:auto; margin-right: auto;" bgcolor="dddddd" cellpadding="15">';
        echo '<tr><b><th>Username</th> <th>Password</th></b></tr>';
        
        while($stmt->fetch()){
            echo "<tr>";
            echo "<td> $usr </td> <td> $pw </td>";
            echo "</tr>";

        }
        echo "</table>";

        $stmt->close();

    }


?>

</div>

</body>

<?php include ('footer.php');?>

</html>