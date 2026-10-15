<?php

    include 'config.php';    

if (isset($_POST['Update_Theater']))
{
    
$theater_id=mysqli_real_escape_string($conn,$_POST["theater_id"]);
$theater_name=mysqli_real_escape_string($conn,$_POST["theater_name"]);
$theater_loc=mysqli_real_escape_string($conn,$_POST["theater_loc"]);

$sql = "UPDATE online_movie_sys_theater SET theater_name='{$theater_name}',theater_loc='{$theater_loc}' WHERE theater_id={$theater_id}";        

        $result = mysqli_query($conn,$sql);
        if ($result) 
        {

            header("Location: Theater.php");

        }
        else{

            echo "Query Failed";
        }
}

?>