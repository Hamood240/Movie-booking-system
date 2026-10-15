<?php

    include 'config.php';    

if (isset($_POST['Update_timing']))
{
    
$timing_id=mysqli_real_escape_string($conn,$_POST["timing_id"]);
$date=mysqli_real_escape_string($conn,$_POST["date"]);
$start_time=mysqli_real_escape_string($conn,$_POST["start_time"]);
$end_time=mysqli_real_escape_string($conn,$_POST["end_time"]);
$gold_no_seats=mysqli_real_escape_string($conn,$_POST["gold_no_seats"]);
$gold_seat_prce=mysqli_real_escape_string($conn,$_POST["gold_seat_prce"]);
$platinum_no_seats=mysqli_real_escape_string($conn,$_POST["platinum_no_seats"]);
$platinum_seat_prce=mysqli_real_escape_string($conn,$_POST["platinum_seat_prce"]);
$box_class_no_seats=mysqli_real_escape_string($conn,$_POST["box_class_no_seats"]);
$box_class_seat_prce=mysqli_real_escape_string($conn,$_POST["box_class_seat_prce"]);
$movie_theater=mysqli_real_escape_string($conn,$_POST["movie_theater"]);

$sql = "UPDATE online_movie_sys_timing SET date='{$date}',start_time='{$start_time}',end_time='{$end_time}',gold_no_seats='{$gold_no_seats}',gold_seat_prce='{$gold_seat_prce}',platinum_no_seats='{$platinum_no_seats}',platinum_seat_prce='{$platinum_seat_prce}',box_class_no_seats='{$box_class_no_seats}',box_class_seat_prce='{$box_class_seat_prce}',movie_theater_id='{$movie_theater}' WHERE timing_id={$timing_id}";        

        $result = mysqli_query($conn,$sql);
        if ($result) 
        {

            header("Location: Timing.php");

        }
        else{

            echo "Query Failed";
        }
}

?>