<?php

    include 'config.php';    

if (isset($_POST['Update_Genre']))
{
    
$genre_id=mysqli_real_escape_string($conn,$_POST["genre_id"]);
$genre_name=mysqli_real_escape_string($conn,$_POST["genre_name"]);

$sql1 = "UPDATE online_movie_sys_genre SET genre_name='{$genre_name}' WHERE genre_id={$genre_id}";        

        $result = mysqli_query($conn,$sql1);
        if ($result) 
        {

            header("Location: Genre.php");

        }
        else{

            echo "Query Failed";
        }
}

?>