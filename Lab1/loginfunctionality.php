<?php include ('config.php');?>
<?php include ('connect.php');?>

<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
      
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

        echo $username . " & " . $password;

        //$query = "SELECT * from user WHERE username = '$username' AND password = '$password'"; 
        $query = "SELECT * from user WHERE username = ? AND password = ?";

        echo"<br> The query: $query <br>";
        echo "<br> The query: " . $query;

        $stmt = $db->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        $stmt->bind_result($userID, $username, $userType, $password);
        $stmt->execute();

        echo '<br> <table style="margin-left:auto; margin-right: auto;" bgcolor="dddddd" cellpadding="15">';
        echo '<tr><b><th>Username</th> <th>Password</th></b></tr>';
        
        while($stmt->fetch()){
            echo "<br> Found user: " . $userID . " " . $username;

            $_SESSION["userID"] = $userID;
            $_SESSION["userType"] = $userType;
            $_SESSION["username"] = $username;

        }
        echo "</table>";

        $stmt->close();

    }

/* if user is admin
  if($_SESSION["userType"]==1)
  {
    header("Location: admin.php");
  }
  else {
    header("Location: index.php");
  }
*/
?>
