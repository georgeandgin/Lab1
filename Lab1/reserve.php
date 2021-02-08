<?php
include ('config.php');
include ('connect.php');


/*
$NoCopies;

$query = "UPDATE `book` SET `NoCopies`= `NoCopies` - 1 WHERE `ISBN` = '".intval($ISBN)."'";

    $result = mysqli_query($db, $query);


    $NoCopies = $_UPDATE[""];

header("Location: index.php?added=true");
*/
    //prompt function
    /* function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Please type your name.";
    $name = prompt($prompt_msg);

    $output_msg = "Hello there ".$name."!";
    echo($output_msg);
    */

    $('#profileclick').click(function(){    
        alert('Your details have been updated');       
   });


?>