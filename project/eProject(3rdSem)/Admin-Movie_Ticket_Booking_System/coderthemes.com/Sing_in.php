
<?php
//This script will handle login

include "Config.php";


if (isset($_POST['login'])) {
    

    $username=mysqli_real_escape_string($conn,$_POST["username"]);
    $password=mysqli_real_escape_string($conn,$_POST["password"]);

    if($username=="admin123" && $password=="admin123" )
    {

        
    session_start();
    $_SESSION["username"] = $username;    
    $_SESSION["loggedin"] = true;

        header("Location: index.php");

    }else{

        echo "enter valid username and password";
    }
}

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 14:51:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/all.min.css">
    <link rel="stylesheet" href="assets2/css/animate.css">
    <link rel="stylesheet" href="assets2/css/flaticon.css">
    <link rel="stylesheet" href="assets2/css/magnific-popup.css">
    <link rel="stylesheet" href="assets2/css/odometer.css">
    <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets2/css/nice-select.css">
    <link rel="stylesheet" href="assets2/css/main.css">

    <link rel="shortcut icon" href="assets2/images/favicon.png" type="image/x-icon">

    <title>Online Movie Ticket Booking </title>

</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">                        
                        <h2 class="title">Log in Here</h2>
                    </div>
                    <form class="account-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
                        <div class="form-group">
                            <label for="">Username<span>*</span></label>
                            <input type="text" name="username" placeholder="Enter Your Username" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Enter Password" id="" required>
                        </div>                     
                        <div class="form-group text-center">
                            <input name="login" type="submit" value="log in">
                        </div>
                    </form>                                
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from pixner.net/boleto/demo/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 14:51:33 GMT -->
</html>







