<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 14:51:33 GMT -->
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
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/logos/t-logo.png" type="image/x-icon">

<title>Movie Ticket Booking </title>

</head>

<body>

        <?php

                include "shared/config.php";
                session_start();
                $username = $password = "";
                $username_err = $password_err = "";

                if ($_SERVER['REQUEST_METHOD'] == "POST"){

                    // Check if username is empty
                    if(empty(trim($_POST["username"]))){ //The trim() function removes whitespace and other predefined characters from both sides of a string. 
                        $username_err = "Username cannot be blank";
                    }
                    else{
                        $sql = "SELECT user_id FROM auth_user WHERE username = ?";
                        $stmt = mysqli_prepare($conn, $sql);
                        if($stmt)
                        {
                            mysqli_stmt_bind_param($stmt, "s", $param_username);

                            // Set the value of param username
                            $param_username = trim($_POST['username']);

                            // Try to execute this statement
                            if(mysqli_stmt_execute($stmt)){
                                mysqli_stmt_store_result($stmt);
                                if(mysqli_stmt_num_rows($stmt) == 1)
                                {
                                    $username_err = "This username is already taken"; 
                                }
                                else{
                                    $username = trim($_POST['username']); // Username value Save here
                                    $first_name=mysqli_real_escape_string($conn,$_POST["first_name"]);
                                    $last_name=mysqli_real_escape_string($conn,$_POST["last_name"]);
                                }
                            }
                            else{
                                echo "Something went wrong";
                            }
                        }
                    }

                    mysqli_stmt_close($stmt);


                // Check for password
                if(empty(trim($_POST['password']))){
                    $password_err = "Password cannot be blank";
                }
                elseif(strlen(trim($_POST['password'])) < 5){
                    $password_err = "Password cannot be less than 5 characters";
                }
                else{
                    $password = trim($_POST['password']);
                }

                // If there were no errors, go ahead and insert into the database
                if(empty($username_err) && empty($password_err))
                {
                    $sql = "INSERT INTO auth_user (first_name,last_name,username,password) VALUES (?,?,?,?)";
                    $stmt = mysqli_prepare($conn, $sql);
                    if ($stmt)
                    {
                        mysqli_stmt_bind_param($stmt, "ssss", $param_first_name,$param_last_name,$param_username, $param_password);

                        // Set these parameters
                        
                        $param_first_name = $first_name;
                        $param_last_name = $last_name;
                        $param_username = $username;
                        $param_password = password_hash($password, PASSWORD_DEFAULT);

                        // Try to execute the query
                        if (mysqli_stmt_execute($stmt))
                        {
                            header("location: Sign_in.php");
                        }
                        else{
                            echo "Something went wrong... cannot redirect!";
                        }
                    }
                    mysqli_stmt_close($stmt);
                }
                mysqli_close($conn);
                }
        ?>


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
                        <span class="cate"></span>
                        <h2 class="title">Register Here </h2>
                    </div>
                    <form method="post" class="account-form">
                    <div class="form-group">
                            <label for="">First Name<span>*</span></label>
                            <input type="text" name="first_name" placeholder="Enter Your First Name" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name<span>*</span></label>
                            <input type="text" name="last_name" placeholder="Enter Your Last Name" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Username<span>*</span></label>
                            <input type="text" name="username" placeholder="Enter Your Username" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Enter Password" id="" required>
                        </div>
                       
                        
                        <div class="form-group text-center">
                            <input type="submit"  value="Sign Up">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="Sign_in.php">Login</a>
                    </div>
                    
               
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


<!-- Mirrored from pixner.net/boleto/demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 14:51:33 GMT -->
</html>