<?php

include "header.php";
include "Config.php";



?>

<?php

if (!isset($_SESSION['username'])) 
{
    ("Location: Sing_in.php");
}
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
                        
                        <h1>Dashboard</h1>  
                        
                        <?php
                                        $count="SELECT COUNT(user_id) AS user_id FROM auth_user";
                                        
                                        
                                    $result=mysqli_query($conn,$count) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){ 
                                         while ($row = mysqli_fetch_assoc($result)) { 
                                             
                                        
                        ?>
                        
                        <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Customers</h5>
                                                <h3 class="mt-3 mb-3">No of Users : <?php echo $row['user_id'];?></h3>
                                                <?php }}?>

                                                <?php
                                    
                                                $count2="SELECT COUNT(ticket_id) AS ticket_id FROM online_movie_sys_tickets";
                                                    
                                                    
                                                $result2=mysqli_query($conn,$count2) or die("Query Failed");
                                                if (mysqli_num_rows($result2) > 0){ 
                                                while ($row2 = mysqli_fetch_assoc($result2)) { 
                                                        
                                                    
                                                ?>  
                                                
                                                
                                                <p class="mb-0 text-muted">
                                                    
                                                    
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-sm-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                                                <h3 class="mt-3 mb-3">No of Tickets : <?php echo $row2['ticket_id'];?></h3>
                                                <p class="mb-0 text-muted">
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->
<?php }}?>
                        
                    </div>
                        <!-- end row -->

                        <?php
                                include "footer.php";
                        ?>