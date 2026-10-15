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

                                                                
                                    include "config.php";
                                    $timing_id=$_GET['id'];

                                    $sql="SELECT *FROM online_movie_sys_timing                                    
                                    WHERE online_movie_sys_timing.timing_id = {$timing_id}";     
                                                    
                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){ 
                                    while ($row = mysqli_fetch_assoc($result)) {                        

                        ?>
                       

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Add Movie</h2>

                                        <div class="tab-content mt-3">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <!-- <form action="" method="POST"> -->
                                                <form  action="Save_Update_Timing.php" method="POST">
                                                    <div class="row">
                                                        
                                                         <div class="form-group">
                                                            <input type="hidden" name="timing_id"  class="form-control" value="<?php echo $row['timing_id'] ?>" placeholder="">
                                                        </div>
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Date : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="date" name="date" value="<?php echo $row['date'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Start Time : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="time" name="start_time" value="<?php echo $row['start_time'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Genre">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">End Time : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="time" name="end_time" value="<?php echo $row['end_time'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 
                                                        
                                                          
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">gold_no_seats : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="gold_no_seats" value="<?php echo $row['gold_no_seats'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 


                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">gold_seat_prce : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="gold_seat_prce" value="<?php echo $row['gold_seat_prce'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">platinum_no_seats : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="platinum_no_seats" value="<?php echo $row['platinum_no_seats'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">platinum_seat_prce : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="platinum_seat_prce" value="<?php echo $row['platinum_seat_prce'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">box_class_no_seats : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="box_class_no_seats" value="<?php echo $row['box_class_no_seats'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">box_class_seat_prce : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="box_class_seat_prce" value="<?php echo $row['box_class_seat_prce'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div>                                                                                                                    

                                                        <div class="col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Movie Theater : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" mb-2 col-10">                                                       
                                                        <select name="movie_theater" class="form-select" id="example-select">
                                                            <option disabled> Select Category</option>                                                         
                                                       
                                                               <?php

                                                                include 'Config.php';
                                                                   
                                                                $sql1="SELECT online_movie_sys_theater_movie.movie_theater_id,online_movie_sys_theater_movie.movie_id,online_movie_sys_theater_movie.theater_id,online_movie_sys_movie.movie_name,online_movie_sys_theater.theater_name
                                                                FROM online_movie_sys_theater_movie
                                                                LEFT JOIN online_movie_sys_movie ON online_movie_sys_theater_movie.movie_id = online_movie_sys_movie.movie_id
                                                                LEFT JOIN online_movie_sys_theater ON online_movie_sys_theater_movie.theater_id = online_movie_sys_theater.theater_id"; 

                                                                    $result1=mysqli_query($conn,$sql1) or die("Query Failed");
                                                                    if (mysqli_num_rows($result1) > 0)
                                                                    { 
                                                                        while ($row1 = mysqli_fetch_assoc($result1))
                                                                        {
                                                                            if ($row['movie_theater_id'] == $row1['movie_theater_id']) 
                                                                            {
                                                                                $selected = 'selected';
                                                                            }
                                                                            else{

                                                                                $selected = '';
                                                                            }
                                                                            echo "<option {$selected} value='{$row1['movie_theater_id']}'>Movie Name : {$row1['movie_name']} | Theater Name : {$row1['theater_name']}</option>";                                                                            
                                                                        }
                                                                    }
                                                                ?>
                                                        </select>
                                                        </div>                                                                                                                 
          
                                                    </div>
                                                    <button type="submit" name="Update_timing" class="btn btn-primary">Update Timing</button>
                                                </form>                                      
                                            </div> <!-- end preview-->
                                        
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->
                        </div>
                        <?php } 
        
    }else{

        echo "Result Not Found.";            

    }
    
    ?>
                        <!-- end row -->
                        
                    </div> <!-- container -->
<?php

        include "footer.php";
?>