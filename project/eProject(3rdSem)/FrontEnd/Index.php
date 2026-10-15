<?php

session_start();
include "shared/header.php";

include "shared/config.php";

?>


    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="assets/images/banner/banner01.jpg"></div>
        <div class="container" >
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for 
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Movie</b>
                      
                    </span>
                </h1>
                <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
            </div>
        </div>
    </section>

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
                        <div class="tab-area" >
                            <div class="tab-item active"  >
                                
                                <?php

                                    $limit = 12;
                                    $sql="SELECT * FROM online_movie_sys_movie
                                    ORDER BY online_movie_sys_movie.movie_id DESC LIMIT {$limit}";         // DESC decending Order                    
                                    
                                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                                    if (mysqli_num_rows($result) > 0){                                                               

                                ?>

                                <div class="row mb-10 justify-content-center">

                                <?php while ($row = mysqli_fetch_assoc($result )) {   ?>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid" >
                                            <div class="movie-thumb c-thumb">
                                                <a class='read-more pull-right' href='Single_Movie_Detail.php?id=<?php echo $row['movie_id']; ?>'>                                                     
                                                
                                                    <img src="../Admin-Movie_Ticket_Booking_System/coderthemes.com/upload/<?php echo $row['Mov_img']; ?>" alt="" style="height:350px;">

                                                   
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
                                    <?php  } 
                                    }
                                    ?> 
                                                                                          
                                </div>
                            </div>
                            <div class="tab-item" style="display: none;">
                            <?php

                                $limit = 12;
                                
                                $sql="SELECT *,online_movie_sys_genre.genre_name FROM online_movie_sys_movie 
                                LEFT JOIN online_movie_sys_genre ON online_movie_sys_movie.genre_id = online_movie_sys_genre.genre_id
                                ORDER BY online_movie_sys_movie.movie_id DESC LIMIT {$limit}";         // DESC decending Order                    

                                $result=mysqli_query($conn,$sql) or die("Query Failed");
                                if (mysqli_num_rows($result) > 0){                                                               

                            ?>
                                <div class="movie-area mb-10">
                               
                                <?php while ($row = mysqli_fetch_assoc($result )) {   ?>
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
                                    <?php
                                    }
                                }
                                    ?>                                
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area text-center">                                                        
                            <a href="All_Movies.php"><span>More</span><i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include "shared/footer.php";
?>