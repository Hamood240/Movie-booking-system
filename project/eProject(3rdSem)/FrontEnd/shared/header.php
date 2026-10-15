<?php


?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 14:43:14 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/logos/t-logo.png" type="image/x-icon">

    <title>Movie Ticket Booking </title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <!-- <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a> -->
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="header-section">
        <div class="container" >
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logos/t-logo.png" alt="logo" style="width:100%;">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="Index.php" class="">Home</a>                      
                    </li>
                    <li>
                        <a href="Ticket_form.php">Book Ticket</a>                    
                    </li>
                    <li>
                                
                        <a href="All_Movies.php">All Movies</a>

                                    <?php
                                        include "config.php";
                                        $sql="SELECT * FROM online_movie_sys_genre
                                        ORDER BY online_movie_sys_genre.genre_id DESC";         // DESC decending Order
                                                
                                        $result=mysqli_query($conn,$sql) or die("Query Failed");
                                        if (mysqli_num_rows($result) > 0){                       

                                    ?>

                        <ul class="submenu">

                                <?php while ($row = mysqli_fetch_assoc($result )) {   ?>
                                            
                                                <li>
                                                <a href='Category.php?C_id=<?php echo $row['genre_id']; ?>'><?php echo $row['genre_name'];?></a>
                                                </li>
                                <?php  } ?>                          
                        </ul>

                        <?php  } ?>

                    </li>                 
                    <li>
                        <a href="about.php">About Us</a>                       
                    </li>                   
                    <li>
                        <a href="contact.php">contact</a>
                        
                       
                    </li>
                    <?php
                    
                    if (!isset($_SESSION['username']))
                    {
                    ?>

                    <li class="header-button pr-0">
                        <a href="Sign_up.php">Register Here</a>
                    </li>                    

                    <?php
                    }
                    ?>
                    <?php
                    
                    if (isset($_SESSION['username']))
                    {                                                                
                    ?>

                    <li class="header-button pr-0">
                        <a href="Logout.php">Logout</a>
                    </li> 
                                       

                    <?php
                    }
                    ?>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <!-- ==========Header-Section========== -->