<?php

    include 'config.php';
    include "header.php";

    	
   

?>



                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 
                       
<?php
                $sql = "SELECT * FROM online_movie_sys_movie";		

                $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

          
                
                
?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Add Ticket</h2>

                                        <div class="tab-content mt-3">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                
                                                <form method="POST" action="Save_Demo_Ticket.php">
                                                    <div class="row">                                                                                                                                                                                                      

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select theater : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="movie_name" id="movie" class="form-select">
                                                            <option value="" disabled selected> Select Movie</option>                                                         
                                                            <?php 
                                                            while($row = mysqli_fetch_assoc($query)){
                                                                echo "<option value='{$row['movie_id']}'>{$row['movie_name']}</option>";
                                                            }?>
                                                        </select>
                                                        </div>
                                                        
                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Timing : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="theater_name"  id="theater" class="form-select">
                                                            <option value="" disabled selected> Select Theater</option>                                                         
                                                           
                                                        </select>
                                                        </div>  
                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Timing : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="date" id="date" class="form-select">
                                                        <option value="" disabled selected> Select Date</option>                                                         
                                                           
                                                        </select>
                                                        </div> 

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Timing : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="time" id="time" class="form-select">
                                                        <option value="" disabled selected> Select Time</option>                                                                                                                    
                                                        </select>
                                                        </div> 

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Timing : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="seat_type" id="seat" class="form-select">
                                                        <option value="" disabled selected> Select Seat Type</option>                                                                                                                    
                                                        </select>
                                                        </div> 

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Timing : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="qty" id="qty" class="form-select">
                                                            <option value="" disabled selected> Select Quantity</option>                                                                                                                    
                                                            <?php
                                                                    $x = 1;

                                                                    while($x <= 10) {                                                                    
                                                                    echo "<option value='$x'>$x</option>";
                                                                    $x++;
                                                                    }
                                                            ?>
                                                        </select>
                                                        </div>                                             

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select theater : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="user_name" id="movie" class="form-select">
                                                            <option value="" disabled selected> Select Movie</option>                                                         
                                                            <?php 
                                                               $sql2 = "SELECT * FROM auth_user";		

                                                               $query = mysqli_query($conn,$sql2) or die("Query Unsuccessful.");
                                                                                                        
                                                            while($row = mysqli_fetch_assoc($query)){
                                                                echo "<option value='{$row['user_id']}'>{$row['username']}</option>";
                                                            }?>
                                                        </select>
                                                        </div>


                                                    </div>
                                                    <button type="submit" name="Add_Ticket" class="btn btn-primary">ADD</button>
                                                </form> 
                                                
                                            </div> <!-- end preview-->
                                        
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                
<?php

        include "footer.php";
?>

<script type="text/javascript" src="js/jquery.js"></script>
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
            success: function(result) {
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

