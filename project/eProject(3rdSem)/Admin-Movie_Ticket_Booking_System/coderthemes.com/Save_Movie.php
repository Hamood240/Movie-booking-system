<?php

include 'config.php';

if (isset($_FILES['movie_img'])) 
{
    $errors = array();

    $file_name = $_FILES['movie_img']['name'];
    $file_size = $_FILES['movie_img']['size'];
    $file_tmp = $_FILES['movie_img']['tmp_name'];
    $file_type = $_FILES['movie_img']['type'];
    $tmp=explode('.',$file_name);
    $file_ext =  end($tmp);
    $extensions = array("jpeg","jpg","png");

    if (in_array($file_ext,$extensions) === false)
    {        
        $errors[] = "This Extension file Not Allowed,Please Choose a JPG or PNG file.";
    }
    if ($file_size > 2097152) // 2MB 
    {
        $errors[] = "file size must be 2mb or lower.";    
    }
    if(empty($errors)==true){

        move_uploaded_file($file_tmp,"upload/".$file_name);
    }
    else{
        print_r($errors);
        die();
    }
}



$movie_name=mysqli_real_escape_string($conn,$_POST["movie_name"]);
$release_date=date('y-m-d',strtotime($_POST["release_date"]));
$movie_trailer=mysqli_real_escape_string($conn,$_POST["movie_trailer"]);
$movie_desc=mysqli_real_escape_string($conn,$_POST["movie_desc"]);
$movie_genre=mysqli_real_escape_string($conn,$_POST["movie_genre"]);                            
//$author = $_SESSION["user_id"];


$sql = "INSERT INTO online_movie_sys_movie(movie_name,Mov_img,release_date,trailer,descrpt,genre_id)              
VALUES ('$movie_name','$file_name','$release_date','$movie_trailer','$movie_desc',$movie_genre)";


if(mysqli_query($conn,$sql))
{
    // header("Location: {$hostname}/admin/post.php"); 
    echo "<p style='Color:red; text-align:center; margin:10px 0px; '>Added Movie</p>";
}
else{

    echo "<div class'alert alert-danger'>Query Failed.</div>";
}

?>