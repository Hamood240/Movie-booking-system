<?php
session_start();
if (!isset($_SESSION['username'])) 
{
    header("Location: Sign_in.php");         
}

include "shared/header.php";

include "shared/config.php";



?>
<section class="details-banner event-details-banner hero-area bg_img seat-plan-banner" data-background="assets/images/banner/banner07.jpg" style="background-image: url(&quot;assets/images/banner/banner07.jpg&quot;);">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block">WHICH SHOW DO YOU </span> 
                        <span class="d-block">WANT TO GO?</span>
                    </h3>                    
                </div>
            </div>
        </div>
    </section>

    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0" style="margin-bottom:200px;margin-top:100px ;">
        <div class="container">
            <div class="search-tab bg_img" data-background="assets/images/ticket/ticket-bg01.jpg">
                <div class="row align-items-center mb--20" style="margin-bottom:40px ;">
                    <div class="col-lg-4 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">welcome </h6>
                            <h3 class="title">Movie Booking System </h3>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-20">
                        <ul class="tab-menu ticket-tab-menu">
                            <li class="active" >
                                <div class="tab-thumb" >
                                    <img src="assets/images/ticket/ticket-tab01.png" alt="ticket">
                                </div>
                                <span>movies</span>
                            </li>                           
                        </ul>
                    </div>
                </div>

    <?php
    
                $sql = "SELECT * FROM online_movie_sys_movie";		

                $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");                          
                
    ?>
    <style>
        .changeBG{
            background: transparent;
        }
        .optionClass{
            text-align: center;
            color: black;
        }
    </style>
                <div class="tab-area" style="width:800px; margin: 0 auto;">
                    <div class="tab-item active">
                        <form  class="ticket-search-form" method="POST" action="Ticket_book.php">                            
                            <div class="row">
                            <div class="form-group col-6" >                                
                                <span class="type"> Movies</span>                                                            
                                <select name="movie_name" id="movie" class="form-select changeBG" required>
                                    <option class="optionClass" value="" disabled selected> Select Movie</option>                                                         
                                    <?php 
                                    while($row = mysqli_fetch_assoc($query))
                                    {
                                        echo "<option class='optionClass' value='{$row['movie_id']}'>{$row['movie_name']}</option>";
                                        $_SESSION["Movie_name"] = $row['movie_name'];
                                    }?>
                                </select>
                            </div>
                            
                            <div class="form-group col-6">                                
                                <span class="type">Theater Name</span>                                
                                <select name="theater_name"  id="theater" class="form-select changeBG" required>
                                        <option class="optionClass" value="" disabled selected> Select Theater</option>                                                           
                                </select>
                            </div>
                            <div class="form-group col-6">                              
                                <span class="type">Date</span>
                                <select name="date" id="date" class="form-select changeBG" required>
                                
                                    <option class="optionClass" value="" disabled selected> Select Date</option>                                                         
                                </select>
                            </div>
                            <div class="form-group col-6">                              
                                <span class="type">Time</span>
                                <select name="time" id="time" class="form-select changeBG" required>
                                    <option class="optionClass" value="" disabled selected> Select Time</option>                                                         
                                </select>
                            </div>
                            <div class="form-group col-6">                              
                                <span class="type">Seat Type</span>
                                <select name="seat_type" id="seat" class="form-select changeBG" required> 
                                    <option class="optionClass" value="" disabled selected> Select Seat</option>                                                                                             
                                </select>
                            </div>
                            <div class="form-group col-6">                              
                                <span class="type">Quantity</span>
                                <select name="qty" id="qty" class="form-select changeBG" required>
                                <option class="optionClass" value="" disabled selected> Select Quantity</option>                                                                                                                    
                                    <?php
                                            $x = 1;

                                            while($x <= 10) 
                                            {                                                         

                                            echo "<option class='optionClass' value='$x'>$x</option>";                                            
                                            $x++;                                            

                                            }                                            

                                    ?>
                                </select>
                            </div>
                          
                            <div class="form-group col-12">                              
                                <!-- <button type="submit" name="Add_Ticket" class="btn btn-primary">Book Now</button> -->
                                <input type="submit" value="Book Now" style="padding:10px ; width:150px ;" class="custom-button" name="Add_Ticket">
                            </div>                                   
                            </div>
                            
                        </form>
                    </div>                                  
                </div>
            </div>
        </div>
    </section>    
    <!-- ==========Ticket-Search========== -->

    
<?php

include "shared/footer.php";

?>

<script src="assets/js/jquery/jquery.js"></script>
<script type="text/javascript">

   // movie theater

   $('#movie').on('change', function() {
        var movie_id = this.value;
        
        $.ajax({
            url : "Save_Ticket.php",
            type: "POST",
            data: {
                movie_data: movie_id
            },
            success: function(result) 
            {
                $('#theater').html(result);                                
            }
        })
    });
    
    // theater date
    $('#theater').on('change', function() {
        var theater_id = this.value;
        
        $.ajax({
            url : "Save_Ticket.php",
            type: "POST",
            data: {
                theater_data: theater_id
            },
            success: function(data) {
                $('#date').html(data);
        
            }
        })
    });

    // date time
    $('#date').on('change', function() {
        var date_id = this.value;
        
        $.ajax({
            url : "Save_Ticket.php",
            type: "POST",
            data: {
                date_data: date_id
            },
            success: function(data) {
                $('#time').html(data);
        
            }
        })
    });

     // date time
     $('#time').on('change', function() {
        var time_id = this.value;
        
        $.ajax({
            url : "Save_Ticket.php",
            type: "POST",
            data: {
                time_data: time_id
            },
            success: function(data) {
                $('#seat').html(data);
        
            }
        })
    });
    
</script>



