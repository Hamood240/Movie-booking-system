
<?php
include "header.php";
include "Config.php";

?>

                        <!-- end page title -->                     
                                
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
                                        <h2>Tickets</h2>                                     
                                 <?php
                                    $sql="SELECT *,online_movie_sys_timing.start_time FROM online_movie_sys_tickets
                                    LEFT JOIN online_movie_sys_theater_movie ON online_movie_sys_theater_movie.movie_theater_id = online_movie_sys_tickets.movie_theater_id
                                    LEFT JOIN online_movie_sys_timing ON online_movie_sys_timing.timing_id = online_movie_sys_tickets.timing_id";         // DESC decending Order


                                        
                    
                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){                       

                                ?>
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Ticket Id</th>
                                        <th>UserName</th>
                                        <th>Movie Name</th>                                       
                                        <th>Theatre Name</th>
                                        <th>Dete</th>
                                        <th>Time</th>
                                        <th>Seat Type</th>
                                        <th>No of Tickets</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php while ($row = mysqli_fetch_assoc($result )) {   ?>
                                        <tr>
                                            
                                            <td class='id'><?php echo $row['ticket_id'];?> </td>
                                            <td><?php echo $row['user_id'];?> </td>
                                            <td><?php echo $row['movie_id'];?> </td>                                            
                                            <td><?php echo $row['theater'];?> </td>                                                    
                                            <td><?php echo $row['date'];?> </td>    
                                            <td><?php echo $row['start_time'];?> </td>    
                                            <td><?php echo $row['seat_cat'];?> </td>                                                                                               
                                            <td><?php echo $row['no_of_tickets'];?> </td> 
                                            <td><?php echo $row['total_price'];?> </td>                                                                                          

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
                        