
<?php

session_start();

include 'shared/config.php';
          

if (isset($_POST['movie_data'])) 
{
    
    $movie_id =   $_POST['movie_data'];

    $sql = "SELECT online_movie_sys_theater.theater_name,online_movie_sys_theater_movie.movie_theater_id FROM online_movie_sys_theater_movie
            LEFT JOIN online_movie_sys_theater ON online_movie_sys_theater_movie.theater_id = online_movie_sys_theater.theater_id
            WHERE movie_id = $movie_id";
    // echo $sql;
    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    $str = '<option class="optionClass" value="" disabled selected>Select Theater</option>';
    while($row = mysqli_fetch_assoc($query)){
      $str .= "<option class='optionClass' value='{$row['movie_theater_id']}'>{$row['theater_name']}</option>";
      $_SESSION["Theater_name"] = $row['theater_name'];
    }				

}
elseif(isset($_POST['theater_data']))
{

    $theater_id =   $_POST['theater_data'];

    $sql = "SELECT * FROM online_movie_sys_timing
    WHERE movie_theater_id = $theater_id";    

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");	
    
    $str = '<option class="optionClass" value="" disabled selected>Select Date</option>';
    while($row = mysqli_fetch_assoc($query)){
      $str .= "<option class='optionClass' value='{$row['timing_id']}'>{$row['date']}</option>";
      $_SESSION["Date"] = $row['date'];
    }
    
    
}
elseif(isset($_POST['date_data']))
{

    $date_id = $_POST['date_data'];
    
    $sql = "SELECT * FROM online_movie_sys_timing WHERE timing_id = $date_id";

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
     
    $str = '<option class="optionClass" value="" disabled selected>Select Time</option>';
    while($row = mysqli_fetch_assoc($query)){
      $str .= "<option class='optionClass' value='{$row['timing_id']}'>{$row['start_time']}</option>";
      $_SESSION["Start_time"] = $row['start_time'];
    }
    
    
}
elseif(isset($_POST['time_data']))
{

    $time_id = $_POST['time_data'];
    
    $sql = "SELECT * FROM online_movie_sys_timing WHERE timing_id = $time_id";
    
    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    $row = mysqli_fetch_assoc($query);
    $str = '<option class="optionClass" value="" disabled selected>Select Seat</option>';
    $str .= "<option class='optionClass' value='{$row['gold_seat_prce']}'>Gold Seat Price : {$row['gold_seat_prce']} </option>";
    $str .= "<option class='optionClass' value='{$row['platinum_seat_prce']}'>Platinum Seat Price : {$row['platinum_seat_prce']} </option>";
    $str .= "<option class='optionClass' value='{$row['box_class_seat_prce']}'>Box Class Seat Price : {$row['box_class_seat_prce']} </option>";	

    // if (isset($row['gold_seat_prce'])) 
    // {
    //   $qty=$_SESSION["Qty"];
    //   $prc=$row['gold_seat_prce'];
    //   $total=$qty*$prc;
    // }
    // elseif(isset($row['platinum_seat_prce']))
    // {

    // $qty=$_SESSION["Qty"];
    // $prc=$row['platinum_seat_prce'];
    // $total=$qty*$prc;

    // }
    // elseif(isset($row['box_class_seat_prce']))
    // {

    //   $qty=$_SESSION["Qty"];
    //   $prc=$row['box_class_seat_prce'];
    //   $total=$qty*$prc;
    // }else{

    //   echo "hello";
    // }

    // $_SESSION["prce"] = $total;
    //$_SESSION["Platinum_seat_prce"] = $row['platinum_seat_prce'];
    //$_SESSION["Box_class_seat_prce"] = $row['box_class_seat_prce'];


    
}

echo $str;

?>

