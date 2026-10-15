
<?php
include "header.php";

?>

                        <!-- end page title --> 
                                <?php


                                if (isset($_POST['add-theater-movie'])) 
                                {

                                    include "config.php";

                                    /* The "mysqli_real_escape_string()" function is an inbuilt function in PHP which is used to escape 
                                    all special characters for use in an SQL query. It is used before inserting a string in a database,
                                    as it removes any special characters that may interfere with the query operations. */

                                    $movie=mysqli_real_escape_string($conn,$_POST["movie"]);
                                    $theater=mysqli_real_escape_string($conn,$_POST["theater"]);

                                    // $sql= "SELECT genre_name FROM online_movie_sys_genre WHERE genre_name = '{$genre}' "; // if there is anyname same username record be not be inserted
                                    // $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    // if (mysqli_num_rows($result) > 0)
                                    // { 
                                    //     echo "<p style='Color:red; text-align:center; margin:10px 0px; '>This Name Already Exists</p>";
                                    // }
                                    // else{

                                        $sql1="INSERT INTO online_movie_sys_theater_movie(movie_id,theater_id) 
                                        VALUES ('{$movie}','{$theater}')";
                                        if (mysqli_query($conn,$sql1)) 
                                        {
                                            echo "<p style='Color:red; text-align:center; margin:10px 0px; '>Added Theater Movie</p>";
                                        }
                                    // }
                                    
                                }

                                ?>
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
                                        <h2>Add Theater Movie</h2>

                                        <div class="tab-content mt-3">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                                    <div class="row">                                                                                                              
                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Genre : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="movie" class="form-select" id="example-select">
                                                            <option disabled > Select Category</option>                                                         
                                                            <?php
                                                                include 'config.php';
                                                                $sql= "SELECT * FROM online_movie_sys_movie"; // if there is anyname same username record be not be inserted
                                                                $result=mysqli_query($conn,$sql) or die("Query Failed");
                                                                if (mysqli_num_rows($result) > 0)
                                                                { 
                                                                    while ($row = mysqli_fetch_assoc($result))
                                                                    {
                                                                        echo "<option value='{$row['movie_id']}'>{$row['movie_name']}</option>";
                                                                    }
                                                                }
                                                            ?>
                                                            </select>
                                                        </div> 
                                                        
                                                        <div class="mt-3 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Select Genre : </label>                                                                                                               
                                                        </div>  
                                                        <div class="mt-2 col-10">                                                       
                                                        <select name="theater" class="form-select" id="example-select">
                                                            <option disabled > Select Category</option>                                                         
                                                            <?php
                                                                include 'config.php';
                                                                $sql= "SELECT * FROM online_movie_sys_theater"; // if there is anyname same username record be not be inserted
                                                                $result=mysqli_query($conn,$sql) or die("Query Failed");
                                                                if (mysqli_num_rows($result) > 0)
                                                                { 
                                                                    while ($row = mysqli_fetch_assoc($result))
                                                                    {
                                                                        echo "<option value='{$row['theater_id']}'>{$row['theater_name']}</option>";
                                                                    }
                                                                }
                                                            ?>
                                                            </select>
                                                        </div> 
                                                    </div>
                                                    <button type="submit" name="add-theater-movie" class="btn btn-primary">ADD</button>
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
                        