
<?php

          

session_start();
include "shared/Header.php";

include "shared/config.php";
if (!isset($_SESSION['username'])) 
{
            header("Location: Sign_in.php");         
}

$movie_name=mysqli_real_escape_string($conn,$_POST["movie_name"]);
$_SESSION['Movie_Name'] = $movie_name;

$theater_name=mysqli_real_escape_string($conn,$_POST["theater_name"]);
//$_SESSION['Theater_name'] = $theater_name;

$date=mysqli_real_escape_string($conn,$_POST["date"]);
//$_SESSION['Date'] = $date;

$time=mysqli_real_escape_string($conn,$_POST["time"]);
$_SESSION['Time'] = $time;

$seat_type=mysqli_real_escape_string($conn,$_POST["seat_type"]);
$_SESSION['Seat_type'] = $seat_type;

$qty=mysqli_real_escape_string($conn,$_POST["qty"]);             
$_SESSION['Qty'] = $qty;      
 
$_SESSION['total']=$seat_type*$qty; // Total Price 

$username = $_SESSION["id"];
$_SESSION['User_name']=$username;

if (isset($_POST['Add_Ticket'])) 
{                 
    
              
        $movie_name=mysqli_real_escape_string($conn,$_POST["movie_name"]);
        $theater_name=mysqli_real_escape_string($conn,$_POST["theater_name"]);
        $date=mysqli_real_escape_string($conn,$_POST["date"]);
        $time=mysqli_real_escape_string($conn,$_POST["time"]);
        $seat_type=mysqli_real_escape_string($conn,$_POST["seat_type"]);
        $qty=mysqli_real_escape_string($conn,$_POST["qty"]);             
        //$user_name=mysqli_real_escape_string($conn,$_POST["user_name"]); 

        $sql="INSERT INTO online_movie_sys_tickets(no_of_tickets,total_price,movie_theater_id,theater,date,seat_cat,timing_id,user_id) 
        VALUES ({$qty},'{$_SESSION['total']}',{$movie_name},'{$theater_name}','{$date}','{$seat_type}',{$time},{$_SESSION['User_name']})";                  
        
}
?>
<form action="#" method="">
<div class="proceed-book bg_img" style="margin:150px;" data-background="assets/images/movie/movie-bg-proceed.jpg" style="background-image: url(&quot;assets/images/movie/movie-bg-proceed.jpg&quot;);">
<div class="proceed-to-book row" >
        <div class="book-item col-12">                        

            <?php
                     if(mysqli_query($conn,$sql))
                     {                
                         echo '<h3 style="text-align:center; " class="title">Your Booking Has Been Done </h3>';
                     }
                     else{
             
                        echo '<h3 style="text-align:center; " class="title">Opps Booking Failed Try Again </h3>';
                     }
            ?>
        </div>
        <div class="book-item col-6">
            <span>User Name</span>
            <h6 class="title"><?php echo $_SESSION["username"]; ?></h6>
        </div>
        <div class="book-item col-6">
            <span>Movie Id</span>
            <h6 class="title"><?php echo $_SESSION['Movie_Name']; ?></h6>
        </div>
        <div class="book-item col-6">
            <span>Theater Name</span>
            <h6 class="title"><?php echo $_SESSION["Theater_name"];  ?></h6>
        </div>
        <div class="book-item col-6">
            <span>Date</span>
            <h6 class="title"><?php echo $_SESSION["Date"]; ?></h6>
        </div>
        <div class="book-item col-6">
            <span>Start Time</span>
            <h6 class="title"><?php echo $_SESSION["Start_time"]; ?></h6>
        </div>
        <div class="book-item col-6">
            <span>Quantity</span>
            <h6 class="title"><?php echo $_SESSION['Qty']; ?></h6>
        </div>
        <div class="book-item col-6">
            <span>Total Price</span>
            <h6 class="title"><?php echo $_SESSION['total']; ?></h6>
        </div>        
        <div class="book-item col-6">            
            <a href="Ticket_form.php" class="custom-button">Go Back</a>
        </div>
    </div>
</div>
</div>
</form>
<?php

include "shared/footer.php";


?>