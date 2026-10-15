<?php

include "config.php";

$theater_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_theater WHERE theater_id = {$theater_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

try {
    $sql = "DELETE FROM online_movie_sys_theater WHERE theater_id = {$theater_id};";
    if (mysqli_query($conn, $sql)) {
        header("Location: Theater.php");  
        exit();
    } else {
        echo "Query Failed";
    }
} catch (mysqli_sql_exception $e) {
    echo "<script>
        alert('Cannot delete this theater because movies or show timings are currently linked to it. Please remove those assignments first.');
        window.location.href = 'Theater.php';
    </script>";
}

?>