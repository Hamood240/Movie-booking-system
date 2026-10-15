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
                                        <style>
                                            .mycss{
                                                border:none ;
                                                border-radius: 0px; 
                                                border-bottom:1px solid #9eb1eb ;
                                                text-align: left;
                                                width: 250px;
                                                outline: none !important;
                                            }
                                            input:focus {

                                            outline: none;
                                            border: none;
                                            border-bottom:1px solid #31d7a9 ;
                                            }
                                            .mycss2{

                                                background: transparent;
                                                border: none;
                                                margin-left: 100px;
                                                position: absolute;
                                                left: 170px;
                                                width: 30px;
                                                
                                            }
                                           
                                        </style>
                                    <form class="" action="Search.php" method ="GET">
                                        
                                    <input class="mycss" name="search" type="text" placeholder="Search fo Movies">                                  
                                    <button class="mycss2" type="submit"><i class="fas fa-search"></i></button>

                                    </form>
                                    </div>
                                </div>
                                <ul class="grid-button tab-menu">
                                    <li class="active">
                                        <i class="fas fa-th"></i>
                                    </li>                            
                                    <li class="">
                                        <i class="fas fa-bars"></i>
                                    </li>                            
                                </ul>
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item active" >
                                
                                <?php

                                    $genre_id=$_GET['C_id'];                                    
                                    $sql="SELECT *,online_movie_sys_genre.genre_name FROM online_movie_sys_movie 
                                    LEFT JOIN online_movie_sys_genre ON online_movie_sys_movie.genre_id = online_movie_sys_genre.genre_id                                    
                                    WHERE online_movie_sys_movie.genre_id = {$genre_id}";         // DESC decending Order

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


                            <div class="tab-item" style="display: none;">      
                                <?php

                                    $genre_id=$_GET['C_id'];                                    
                                    $sql="SELECT *,online_movie_sys_genre.genre_name FROM online_movie_sys_movie 
                                    LEFT JOIN online_movie_sys_genre ON online_movie_sys_movie.genre_id = online_movie_sys_genre.genre_id                                    
                                    WHERE online_movie_sys_movie.genre_id = {$genre_id}";         // DESC decending Order

                                ?>                    
                                <div class="movie-area mb-10">

                                <?php
                                    
                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){   
                                    while ($row = mysqli_fetch_assoc($result )) {   
                        
                                ?>
                                                           
                                    <div class="movie-list">
                                    
                                        <div class="movie-thumb c-thumb">
                                        <a class='read-more pull-right' href='Single_Movie_Detail.php?id=<?php echo $row['movie_id']; ?>'>                                                                                                     
                                                <img src="../Admin-Movie_Ticket_Booking_System/coderthemes.com/upload/<?php echo $row['Mov_img']; ?>" alt=""/>                                               
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a  href='Single_Movie_Detail.php?id=<?php echo $row['movie_id']; ?>'><?php echo $row['movie_name']; ?></a>
                                            </h5>                                            
                                            <div class="release">
                                                <span>Genre : </span> <a style="color:#31d7a9 ;" > <?php echo $row['genre_name']; ?></a>
                                            </div>

                                            <div class="release">
                                                <span>Release Date : </span> <a href="#0"><?php echo $row['release_date']; ?></a>
                                            </div>
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
                                            <div class="book-area">
                                                <div class="book-ticket">                                                                                                    
                                                    <div class="react-item mr-auto">
                                                        <a href="Ticket_form.php">
                                                            <div class="thumb">
                                                                <img src="assets/images/icons/book.png" alt="icons">
                                                            </div>
                                                            <span>book ticket</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                        <a  href='Single_Movie_Detail.php?id=<?php echo $row['movie_id']; ?>'>
                                                            <div class="thumb">
                                                                <img src="assets/images/icons/play-button.png" alt="icons">
                                                            </div>
                                                            <span>watch trailer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>                              
                                </div>
                                <?php } ?>                                   
                            </div>                            
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <?php

    include "shared/footer.php";

    ?>