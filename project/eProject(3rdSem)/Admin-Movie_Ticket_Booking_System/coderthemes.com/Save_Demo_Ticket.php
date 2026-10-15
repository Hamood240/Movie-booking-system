<?php

include "Config.php";


if (isset($_POST['Add_Ticket'])) 
{            
        
        $movie_name=mysqli_real_escape_string($conn,$_POST["movie_name"]);
        $theater_name=mysqli_real_escape_string($conn,$_POST["theater_name"]);
        $date=mysqli_real_escape_string($conn,$_POST["date"]);
        $time=mysqli_real_escape_string($conn,$_POST["time"]);
        $seat_type=mysqli_real_escape_string($conn,$_POST["seat_type"]);
        $qty=mysqli_real_escape_string($conn,$_POST["qty"]);                    
        $user_name=mysqli_real_escape_string($conn,$_POST["user_name"]); 

        $sql="INSERT INTO online_movie_sys_tickets(no_of_tickets,total_price,movie_theater_id,theater,date,seat_cat,timing_id,user_id) 
        VALUES ({$qty},'100',{$movie_name},'{$theater_name}','{$date}','{$seat_type}',{$time},{$user_name})";
        echo $sql;            

        if(mysqli_query($conn,$sql))
        {                
            echo "<p style='Color:red; text-align:center; margin:10px 0px; '>Added Ticket</p>";
        }
        else{

            echo "<div class'alert alert-danger'>Query Failed.</div>";
        }
        
}else{

    echo "<div class'alert alert-danger'>Query Failed2.</div>";
}

?>