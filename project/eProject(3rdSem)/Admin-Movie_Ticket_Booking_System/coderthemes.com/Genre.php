<?php

include "header.php";
include "Config.php";

?>
                    
                                
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
                                        <h2>Genre</h2>                                     
                                 <?php
                                    // $sql="SELECT * FROM online_movie_sys_movie
                                    // ORDER BY online_movie_sys_movie.movie_id DESC";         // DESC decending Order
                    
                                    
                                    $sql="SELECT * FROM online_movie_sys_genre";


                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){                       

                                ?>
                            <table  class="table table-bordered table-centered mb-0" >
                                <thead>
                                    <tr>

                                        <th>Movie Id</th>
                                        <th>Genre Name</th>                                        
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($result )) { ?>
                                        <tr>
                                            
                                            <td class='id'><?php echo $row['genre_id'];?> </td>
                                            <td><?php echo $row['genre_name'];?> </td>
                                                                                      
                                            <td class='edit'><a href='Update_Genre.php?id=<?php echo $row['genre_id'];?>'><i class='mdi mdi-pencil'></i></a></td>
                                            
                                            <td class='delete'><a href='Delete_Genre.php?id=<?php echo $row['genre_id'];?>'><i class='mdi mdi-delete'></i></a></td>
                                            
                                        </tr> 
                                    <?php  } ?> 

                                </tbody>
                            </table>

               

                            <?php  } ?>

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