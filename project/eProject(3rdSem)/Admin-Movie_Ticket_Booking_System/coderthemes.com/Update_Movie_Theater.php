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
                                    $movie_theater_id=$_GET['id'];

                                    $sql="SELECT *,online_movie_sys_movie.movie_name,online_movie_sys_theater.theater_name FROM online_movie_sys_theater_movie
                                    LEFT JOIN online_movie_sys_movie ON online_movie_sys_movie.movie_id = online_movie_sys_theater_movie.movie_id
                                    LEFT JOIN online_movie_sys_theater ON online_movie_sys_theater.theater_id = online_movie_sys_theater_movie.theater_id
                                    WHERE online_movie_sys_theater_movie.movie_theater_id = {$movie_theater_id}";

                                    // $sql="SELECT *,online_movie_sys_genre.genre_name,online_movie_sys_genre.genre_id FROM online_movie_sys_movie 
                                    // LEFT JOIN online_movie_sys_genre ON online_movie_sys_movie.genre_id = online_movie_sys_genre.genre_id                                    
                                    // WHERE online_movie_sys_movie.movie_id = {$movie_id}";     
                                                    
                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){ 
                                    while ($row = mysqli_fetch_assoc($result)) {                        

                        ?>
                       

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Update Movie Theater</h2>

                                        <div class="tab-content mt-3">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <!-- <form action="" method="POST"> -->
                                                <form  action="Save_Update_Movie_Theater.php" method="POST">
                                                    <div class="row">
                                                        
                                                         <div class="form-group">
                                                            <input type="hidden" name="movie_theater_id"  class="form-control" value="<?php echo $row['movie_theater_id'] ?>">
                                                        </div>                                                   

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Movie : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="movie_name" class="form-select" id="example-select">
                                                            <option disabled > Select Movie</option>                                                         
                                                       
                                                               <?php
                                                                    include 'Config.php';
                                                                    $sql1= "SELECT * FROM online_movie_sys_movie"; // if there is anyname same username record be not be inserted
                                                                    $result1=mysqli_query($conn,$sql1) or die("Query Failed");
                                                                    if (mysqli_num_rows($result1) > 0)
                                                                    { 
                                                                        while ($row1 = mysqli_fetch_assoc($result1))
                                                                        {
                                                                            if ($row['movie_id'] == $row1['movie_id']) 
                                                                            {
                                                                                $selected = 'selected';
                                                                            }
                                                                            else{

                                                                                $selected = '';
                                                                            }
                                                                            echo "<option {$selected} value='{$row1['movie_id']}'>{$row1['movie_name']}</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                        </select>
                                                        </div>                                                        

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Theater : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="theater_name" class="form-select" id="example-select">
                                                            <option disabled > Select Theater</option>                                                         
                                                       
                                                               <?php
                                                                    include 'Config.php';
                                                                    $sql2= "SELECT * FROM online_movie_sys_theater"; // if there is anyname same username record be not be inserted
                                                                    $result1=mysqli_query($conn,$sql2) or die("Query Failed");
                                                                    if (mysqli_num_rows($result1) > 0)
                                                                    { 
                                                                        while ($row1 = mysqli_fetch_assoc($result1))
                                                                        {
                                                                            if ($row['theater_id'] == $row1['theater_id']) 
                                                                            {
                                                                                $selected = 'selected';
                                                                            }
                                                                            else{

                                                                                $selected = '';
                                                                            }
                                                                            echo "<option {$selected} value='{$row1['theater_id']}'>{$row1['theater_name']}</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                        </select>
                                                        </div> 

          
                                                    </div>
                                                    <button type="submit" name="Update_Movie_Theater" class="btn btn-primary">Update Movie Theater</button>
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