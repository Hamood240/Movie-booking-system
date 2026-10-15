<?php

include "config.php";

$movie_theater_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_theater_movie WHERE movie_theater_id = {$movie_theater_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : Select");
$row = mysqli_fetch_assoc($result);

try {
    $sql = "DELETE FROM online_movie_sys_theater_movie WHERE movie_theater_id = {$movie_theater_id};";
    if (mysqli_query($conn, $sql)) {
        header("Location: Movie_Theater.php");
        exit();
    } else {
        echo "Query Failed";
    }
} catch (mysqli_sql_exception $e) {
    echo "<script>
        alert('Cannot delete this theater-movie assignment because show timings or booked tickets are currently linked to it. Please remove those first.');
        window.location.href = 'Movie_Theater.php';
    </script>";
}

?>