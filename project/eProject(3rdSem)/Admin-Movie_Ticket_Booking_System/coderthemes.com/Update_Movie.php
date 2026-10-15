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
                                    $movie_id=$_GET['id'];

                                    $sql="SELECT *,online_movie_sys_genre.genre_name,online_movie_sys_genre.genre_id FROM online_movie_sys_movie 
                                    LEFT JOIN online_movie_sys_genre ON online_movie_sys_movie.genre_id = online_movie_sys_genre.genre_id                                    
                                    WHERE online_movie_sys_movie.movie_id = {$movie_id}";     
                                                    
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
                                                <form  action="Save_Update_Movie.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        
                                                         <div class="form-group">
                                                            <input type="hidden" name="movie_id"  class="form-control" value="<?php echo $row['movie_id'] ?>" placeholder="">
                                                        </div>
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Movie Name : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="movie_name" value="<?php echo $row['movie_name'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Image : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="file" name="new_movie_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                                                                                                                                
                                                            <img  src="upload/<?php echo $row['Mov_img'] ?>" height="150px">
                                                            <input type="hidden" name="old_image" value="<?php echo $row['Mov_img'] ?>">
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Release Date : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="date" name="release_date" value="<?php echo $row['release_date'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Genre">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Trailer : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="movie_trailer" value="<?php echo $row['trailer'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 
                                                        
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Description : </label>                                                                                                               
                                                        </div>  
                                                        <div class="col-10">  
                                                        <textarea name="movie_desc" class="form-control"  required rows="5">
                                                            <?php echo $row['descrpt'] ?>
                                                        </textarea>                                                                                                                                                                                                                                         
                                                            
                                                        </div> 

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Genre : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="movie_genre" class="form-select" id="example-select">
                                                            <option disabled > Select Category</option>                                                         
                                                       
                                                               <?php
                                                                    include 'Config.php';
                                                                    $sql1= "SELECT * FROM online_movie_sys_genre"; // if there is anyname same username record be not be inserted
                                                                    $result1=mysqli_query($conn,$sql1) or die("Query Failed");
                                                                    if (mysqli_num_rows($result1) > 0)
                                                                    { 
                                                                        while ($row1 = mysqli_fetch_assoc($result1))
                                                                        {
                                                                            if ($row['genre_id'] == $row1['genre_id']) 
                                                                            {
                                                                                $selected = 'selected';
                                                                            }
                                                                            else{

                                                                                $selected = '';
                                                                            }
                                                                            echo "<option {$selected} value='{$row1['genre_id']}'>{$row1['genre_name']}</option>";
                                                                        }
                                                                    }
                                                                ?>
                                                        </select>
                                                        </div> 

          
                                                    </div>
                                                    <button type="submit" name="" class="btn btn-primary">ADD</button>
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