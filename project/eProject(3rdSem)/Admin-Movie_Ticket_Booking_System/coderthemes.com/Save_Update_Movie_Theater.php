<?php

    include 'config.php';    

if (isset($_POST['Update_Movie_Theater']))
{
    
$movie_theater_id=mysqli_real_escape_string($conn,$_POST["movie_theater_id"]);
$movie_name=mysqli_real_escape_string($conn,$_POST["movie_name"]);
$theater_name=mysqli_real_escape_string($conn,$_POST["theater_name"]);

$sql = "UPDATE online_movie_sys_theater_movie SET movie_id ='{$movie_name}',theater_id='{$theater_name}' WHERE movie_theater_id={$movie_theater_id}";        

        $result = mysqli_query($conn,$sql);
        if ($result) 
        {

            header("Location: Movie_Theater.php");

        }
        else{

            echo "Query Failed";
        }
}

?>