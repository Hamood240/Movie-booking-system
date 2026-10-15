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
                                    $genre_id=$_GET['id'];

                                    $sql="SELECT * FROM online_movie_sys_genre
                                    WHERE genre_id = {$genre_id}";    
                                                    
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
                                                <form  action="Save_Update_Genre.php" method="POST" >
                                                    <div class="row">
                                                        
                                                         <div class="form-group">
                                                            <input type="hidden" name="genre_id"  class="form-control" value="<?php echo $row['genre_id'] ?>" placeholder="">
                                                        </div>
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Movie Name : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="genre_name" value="<?php echo $row['genre_name'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">                                                        
                                                        </div>                                                                                 
          
                                                    </div>
                                                    <button type="submit" name="Update_Genre" class="btn btn-primary">Update Genre</button>
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