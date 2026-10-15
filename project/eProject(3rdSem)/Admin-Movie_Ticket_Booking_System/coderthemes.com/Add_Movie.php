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
                       

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Add Movie</h2>

                                        <div class="tab-content mt-3">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <!-- <form action="" method="POST"> -->
                                                <form  action="Save_Movie.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Movie Name : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="movie_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Image : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="file" name="movie_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Release Date : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="date" name="release_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Genre">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Trailer : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="movie_trailer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div> 
                                                        
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Description : </label>                                                                                                               
                                                        </div>  
                                                        <div class="col-10">                                                                                                                                                                                                                                           
                                                            <textarea name="movie_desc" class="form-control" id="example-textarea" rows="5"></textarea>
                                                        </div> 

                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Genre : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="movie_genre" class="form-select" id="example-select">
                                                            <option disabled > Select Category</option>                                                         
                                                            <?php
                                                                include 'config.php';
                                                                $sql= "SELECT * FROM online_movie_sys_genre"; // if there is anyname same username record be not be inserted
                                                                $result=mysqli_query($conn,$sql) or die("Query Failed");
                                                                if (mysqli_num_rows($result) > 0)
                                                                { 
                                                                    while ($row = mysqli_fetch_assoc($result))
                                                                    {
                                                                        echo "<option value='{$row['genre_id']}'>{$row['genre_name']}</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        </div> 

          
                                                    </div>
                                                    <button type="submit" name="add-genre" class="btn btn-primary">ADD</button>
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