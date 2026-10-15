<?php
include "config.php";

$movie_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// 1. Fetch movie details
$sql_movie = "SELECT movie_name, Mov_img FROM online_movie_sys_movie WHERE movie_id = {$movie_id}";
$result_movie = mysqli_query($conn, $sql_movie);
$movie = mysqli_fetch_assoc($result_movie);

if (!$movie) {
    header("Location: Movie.php?error=not_found");
    exit();
}

$movie_name = $movie['movie_name'];

// 2. CHECK: Have any tickets been bought for this movie?
$sql_tickets = "SELECT COUNT(*) AS total_tickets 
                FROM online_movie_sys_tickets t
                INNER JOIN online_movie_sys_theater_movie tm 
                    ON t.movie_theater_id = tm.movie_theater_id
                WHERE tm.movie_id = {$movie_id}";

$result_tickets = mysqli_query($conn, $sql_tickets);
$ticket_data = mysqli_fetch_assoc($result_tickets);
$total_tickets = (int)($ticket_data['total_tickets'] ?? 0);

// 3. If tickets exist, BLOCK deletion
if ($total_tickets > 0) {
    header("Location: Movie.php?error=tickets_exist&count={$total_tickets}&name=" . urlencode($movie_name));
    exit();
}

// 4. If NO tickets exist, safely delete the movie and its empty schedules
try {
    mysqli_begin_transaction($conn);

    // a. Remove any review/ratings tied to this movie
    mysqli_query($conn, "DELETE FROM online_movie_sys_reviewrating WHERE movie_id = {$movie_id}");

    // b. Remove theater schedules (timings automatically cascade-delete in database)
    mysqli_query($conn, "DELETE FROM online_movie_sys_theater_movie WHERE movie_id = {$movie_id}");

    // c. Delete the movie record
    mysqli_query($conn, "DELETE FROM online_movie_sys_movie WHERE movie_id = {$movie_id}");

    // d. Delete poster image from disk if it exists
    if (!empty($movie['Mov_img']) && file_exists("upload/" . $movie['Mov_img'])) {
        unlink("upload/" . $movie['Mov_img']);
    }

    mysqli_commit($conn);
    header("Location: Movie.php?success=deleted&name=" . urlencode($movie_name));
    exit();

} catch (Exception $e) {
    mysqli_rollback($conn);
    header("Location: Movie.php?error=failed&name=" . urlencode($movie_name));
    exit();
}
?>