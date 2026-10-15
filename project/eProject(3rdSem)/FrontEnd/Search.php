<?php
session_start();
include "shared/header.php";
include "shared/config.php";


?>


    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="assets/images/banner/banner07.jpg">
        <div class="container">
            <div class="speaker-banner-content">       
                <h2 class="title">Movies</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="Index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        Movie Category
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

            <?php
            include "config.php";
            if(isset($_GET['search'])){

            $search_term = mysqli_real_escape_string($conn,$_GET['search']);
            
              
                ?>

    <!-- ==========Banner-Section========== -->

 <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">               
                <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left">                                 
                                <div class="item">
                                    <h6>Search : <?php echo $search_term; ?></h6>
                                </div>
                                </div>
                                <ul class="grid-button tab-menu">
                                    <li class="active">
                                        <i class="fas fa-th"></i>
                                    </li>                            
                                                             
                                </ul>
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item active" >
                                
                                <?php
                                    
                                                                                                        
                                    $sql="SELECT *,online_movie_sys_genre.genre_name FROM online_movie_sys_movie 
                                    LEFT JOIN online_movie_sys_genre ON online_movie_sys_movie.genre_id = online_movie_sys_genre.genre_id                                    
                                    WHERE movie_name LIKE '%{$search_term}%'";         // DESC decending Order

                                ?>

                                <div class="row mb-10 justify-content-center">
                                    <?php
                                    
                                     $result=mysqli_query($conn,$sql) or die("Query Failed");
                                     if (mysqli_num_rows($result) > 0){   
                                     while ($row = mysqli_fetch_assoc($result )) {   
                         
                                    ?>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a class='read-more pull-right' href='Single_Movie_Detail.php?id=<?php echo $row['movie_id']; ?>'>                                                                                                     
                                                    <img src="../Admin-Movie_Ticket_Booking_System/coderthemes.com/upload/<?php echo $row['Mov_img']; ?>" alt=""/>                                                   
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href='Single_Movie_Detail.php?id=<?php echo $row['movie_id']; ?>'><?php echo $row['movie_name'];?></a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="assets/images/movie/tomato.png" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="assets/images/movie/cake.png" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 

                                    <?php } ?>
                                                                                          
                                </div>

                                <?php } ?>

                            </div>

                           
                        </div>   
                        <?php
                            }else{

                                echo "<h2>No Record Found.</h2>";
                            }
                        ?>
                
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <?php
               
    include "shared/footer.php";

    ?>