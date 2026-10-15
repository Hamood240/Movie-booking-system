
<?php
include "header.php";
include "Config.php";



if (isset($_POST['add-timing'])) 
{

    /* The "mysqli_real_escape_string()" function is an inbuilt function in PHP which is used to escape 
    all special characters for use in an SQL query. It is used before inserting a string in a database,
    as it removes any special characters that may interfere with the query operations. */

    //$s_time=mysqli_real_escape_string($conn,$_POST["s_time"]);
    $date=date('y-m-d',strtotime($_POST["date"]));
    $s_time=date('H:i:s',strtotime($_POST["s_time"]));
    $e_time=date('H:i:s',strtotime($_POST["e_time"]));    
    $g_seat=mysqli_real_escape_string($conn,$_POST["g_seat"]);
    $g_price=mysqli_real_escape_string($conn,$_POST["g_price"]);
    $p_seat=mysqli_real_escape_string($conn,$_POST["p_seat"]);
    $p_price=mysqli_real_escape_string($conn,$_POST["p_price"]);
    $b_seat=mysqli_real_escape_string($conn,$_POST["b_seat"]);
    $b_price=mysqli_real_escape_string($conn,$_POST["b_price"]);
    $theater_movie_name=mysqli_real_escape_string($conn,$_POST["theater_movie_name"]);

    // $sql= "SELECT movie_name FROM online_movie_sys_movie WHERE movie_name = '{$movie_name}' "; // if there is anyname same username record be not be inserted
    // $result=mysqli_query($conn,$sql) or die("Query Failed");
    // if (mysqli_num_rows($result) > 0)
    // { 
    //     echo "<p style='Color:red; text-align:center; margin:10px 0px; '>This Name Already Exists</p>";
    // }
    // else{

        $sql1="INSERT INTO online_movie_sys_timing(date,start_time,end_time,gold_no_seats,gold_seat_prce,platinum_no_seats,platinum_seat_prce,
        box_class_no_seats,box_class_seat_prce,movie_theater_id) 
        VALUES ('{$date}','{$s_time}','{$e_time}',{$g_seat},{$g_price},{$p_seat},{$p_price},{$b_seat},{$b_price},{$theater_movie_name})";
        
        if (mysqli_query($conn,$sql1))         
        {
          
        echo "<p style='Color:red; text-align:center; margin:10px 0px; '>Added Timing</p>";
        
        }
        else{
            echo $sql;
            echo "<p style='Color:red; text-align:center; margin:10px 0px; '>Failed</p>";
        }
//     }
    
}


?>
                        <!-- end page title --> 
                   
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


                        <div class="row">                      
                            <div class="col-lg-12">                            
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Add Timing</h2>

                                        <div class="tab-content mt-3">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                                    <div class="row">
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Date : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Start Time ">                                                        
                                                        </div> 
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Start Time : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="time" name="s_time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Start Time ">                                                        
                                                        </div> 
                                                        
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">End Time : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="time" name="e_time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="End Time">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Gold No Seats : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="g_seat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gold No Seats">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Gold Seat Price : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="g_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gold Seat Price">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Platinum No Seats : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="p_seat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Platinum No Seats">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Platinum Seat Price : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="p_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Platinum Seat Price">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Box No Seats : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="b_seat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Box No Seats">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Box No Price : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="b_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Box No Price">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Moive : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <!-- <input type="text" name="movie_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Genre">                                                         -->

                                                            <select name="theater_movie_name" class="form-select" id="example-select">
                                                            <option disabled selected> Select Movie</option>                                                         
                                             

                                                            <?php
                                                                include 'config.php';
                                                                
                                                                $sql= "SELECT online_movie_sys_theater_movie.movie_theater_id,online_movie_sys_theater_movie.movie_id,online_movie_sys_theater_movie.theater_id,online_movie_sys_movie.movie_name,online_movie_sys_theater.theater_name
                                                                FROM online_movie_sys_theater_movie
                                                                LEFT JOIN online_movie_sys_movie ON online_movie_sys_theater_movie.movie_id = online_movie_sys_movie.movie_id
                                                                LEFT JOIN online_movie_sys_theater ON online_movie_sys_theater_movie.theater_id = online_movie_sys_theater.theater_id"; // if there is anyname same username record be not be inserted
                                                                $result=mysqli_query($conn,$sql) or die("Query Failed");
                                                                if (mysqli_num_rows($result) > 0)
                                                                { 
                                                                    while ($row = mysqli_fetch_assoc($result))
                                                                    {
                                                                        echo "<option value='{$row['movie_theater_id']}'>Movie Name : {$row['movie_name']} | Theater Name : {$row['theater_name']}</option>";
                                                                    }
                                                                }
                                                            ?>
                                                            </select>
                                                        </div> 

                                                    </div>
                                                    <button type="submit" name="add-timing" class="btn btn-primary">ADD</button>
                                                </form>                                      
                                            </div> <!-- end preview-->
                                        
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                        <!-- end row -->

                        <?php
                                include "footer.php";
                        ?>
                        