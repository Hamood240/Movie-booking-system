<?php

include "config.php";

$genre_id=$_GET['id'];

$sql1 = "SELECT * FROM online_movie_sys_genre WHERE genre_id = {$genre_id}";

$result = mysqli_query($conn,$sql1) or die("Query Failed : ");
$row = mysqli_fetch_assoc($result);

// unlink("upload/".$row['Mov_img']);       //unlink() Means Delete Any File From Folder 

try {
    $sql = "DELETE FROM online_movie_sys_genre WHERE genre_id = {$genre_id};";
    if (mysqli_query($conn, $sql)) {
        header("Location: Genre.php");
        exit();
    } else {
        echo "Query Failed";
    }
} catch (mysqli_sql_exception $e) {
    echo "<script>
        alert('Cannot delete this genre because movies are currently assigned to it. Please reassign or delete those movies first.');
        window.location.href = 'Genre.php';
    </script>";
}

?>