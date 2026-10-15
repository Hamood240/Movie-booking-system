<?php

    include 'config.php';
    include "header.php";

if (isset($_POST['add-theater'])) 
{
    

    /* The "mysqli_real_escape_string()" function is an inbuilt function in PHP which is used to escape 
    all special characters for use in an SQL query. It is used before inserting a string in a database,
    as it removes any special characters that may interfere with the query operations. */

    $theater_name=mysqli_real_escape_string($conn,$_POST["theater_name"]);
    $theater_loc=mysqli_real_escape_string($conn,$_POST["theater_loc"]);

    $sql= "SELECT theater_name FROM online_movie_sys_theater WHERE theater_name = '{$theater_name}' "; // if there is anyname same username record be not be inserted
    $result=mysqli_query($conn,$sql) or die("Query Failed");
    if (mysqli_num_rows($result) > 0)
    { 
        echo "<p style='Color:red; text-align:center; margin:10px 0px; '>This Name Already Exists</p>";
    }
    else{

        $sql1="INSERT INTO online_movie_sys_theater(theater_name,theater_loc) 
        VALUES ('{$theater_name}','{$theater_loc}')";
        if (mysqli_query($conn,$sql1)) 
        {
            echo "<p style='Color:red; text-align:center; margin:10px 0px; '>Added Theater</p>";
        }
    }
    
}

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
                                        <h2>Add Theater</h2>

                                        <div class="tab-content mt-3">
                                            <div class="tab-pane show active" id="basic-form-preview">
                                                <!-- <form action="" method="POST"> -->
                                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Theater Name : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="theater_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Theater">                                                        
                                                        </div> 

                                                        <div class="mt-1 mb-3 col-2">
                                                            <label for="exampleInputEmail1" class="form-label">Theater Location : </label>                                                                                                               
                                                        </div>  
                                                        <div class=" col-10">                                                       
                                                            <input type="text" name="theater_loc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Theater Location">                                                        
                                                        </div>                                                                
                                                    </div>
                                                    <button type="submit" name="add-theater" class="btn btn-primary">ADD</button>
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