
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
                                        <h2>Timing</h2>                                     
                                 <?php
                                
                                    $sql="SELECT * FROM online_movie_sys_timing";

                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){                       

                                ?>
                            <table  class="table table-bordered table-centered mb-0" >
                                <thead>

                                    <tr>
                                        <th>Timing Id</th>
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Gold No Seats</th>
                                        <th>Gold Seat Price</th>
                                        <th>Platinum No Seats</th>
                                        <th>Platinum Seat Price</th>
                                        <th>Box No Seats</th>
                                        <th>Box Seat Price</th>
                                        <th>Movie Theater Id</th>                                        
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>

                                </thead>
                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($result )) {   ?>
                                        <tr>
                                            
                                            <td class='id'><?php echo $row['timing_id'];?> </td>
                                            <td><?php echo $row['date'];?> </td>
                                            <td><?php echo $row['start_time'];?> </td>
                                            <td><?php echo $row['end_time'];?> </td>
                                            <td><?php echo $row['gold_no_seats'];?> </td>
                                            <td><?php echo $row['gold_seat_prce'];?> </td>
                                            <td><?php echo $row['platinum_no_seats'];?> </td>
                                            <td><?php echo $row['platinum_seat_prce'];?> </td>                                            
                                            <td><?php echo $row['box_class_no_seats'];?> </td>
                                            <td><?php echo $row['box_class_seat_prce'];?> </td>
                                            <td><?php echo $row['movie_theater_id'];?> </td>
                                          
                                            <td class='edit'><a href='Update_Timing.php?id=<?php echo $row['timing_id'];?>'><i class='mdi mdi-pencil'></i></a></td>

                                            <td class='delete'><a href='Delete_Timing.php?id=<?php echo $row['timing_id'];?>'><i class='mdi mdi-delete'></i></a></td>
                                            
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
                        