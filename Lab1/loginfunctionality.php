

<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * from user WHERE username = '$username' AND password = '$password'"; 
        //$query = "SELECT * from users WHERE username = ? AND password = ?";

        echo"<br> The query: $query <br>";

        $stmt = $db->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        $stmt->bind_result($userID, $userName, $userPassword, $userType);
        $stmt->execute();

        echo '<br> <table style="margin-left:auto; margin-right: auto;" bgcolor="dddddd" cellpadding="15">';
        echo '<tr><b><th>Username</th> <th>Password</th></b></tr>';
        
        while($stmt->fetch()){
            echo "<br> Found user: " . $userID . " " . $userName;

            $_SESSION["userID"] = $rUserID;
            $_SESSION["userType"] = $rUserType;
            $_SESSION["username"] = $rUsername;

        }
        echo "</table>";

        $stmt->close();

    }

// if user is admin
  if($_SESSION["userType"]==1)
  {
    header("Location: ../admin.php");
  }
  else {
    header("Location: ../index.php");
  }

?>
