<?php

include "config.php";

$timing_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_timing WHERE timing_id = {$timing_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

$sql = "DELETE FROM online_movie_sys_timing WHERE timing_id = {$timing_id};";

if(mysqli_multi_query($conn,$sql))
{
    header("Location: Timing.php");  
}
else{

    echo "Query Failed";
}

?>