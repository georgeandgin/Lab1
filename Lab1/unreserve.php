<?php

include ('config.php');
include ('connect.php');

if(isset($_POST['ISBN'])){

    $ISBN = $_POST['ISBN'];

    $query = "UPDATE `MyBooks` SET `NoCopies` = `NoCopies` - '1' WHERE ISBN = '$ISBN'";

    $result = mysqli_query($db, $query);

    $query = "UPDATE `Book` SET `NoCopies` = `NoCopies` + '1' WHERE ISBN = '$ISBN'";

    $result = mysqli_query($db, $query);

    header("Location: browse.php?added=$ISBN");
}

?>