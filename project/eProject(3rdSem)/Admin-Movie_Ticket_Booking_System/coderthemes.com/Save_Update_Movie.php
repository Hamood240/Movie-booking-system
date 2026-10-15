
<?php

include "Config.php";

if (empty($_FILES['new_movie_img']['name']))
{
    $file_name = $_POST['old_image'];
    
    
}else{

    $errors = array();

    $file_name = $_FILES['new_movie_img']['name'];
    $file_size = $_FILES['new_movie_img']['size'];
    $file_tmp = $_FILES['new_movie_img']['tmp_name'];
    $file_type = $_FILES['new_movie_img']['type'];
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

$movie_id=mysqli_real_escape_string($conn,$_POST["movie_id"]);
$movie_name=mysqli_real_escape_string($conn,$_POST["movie_name"]);
$release_date=mysqli_real_escape_string($conn,$_POST["release_date"]);
$movie_trailer=mysqli_real_escape_string($conn,$_POST["movie_trailer"]);
$movie_desc=mysqli_real_escape_string($conn,$_POST["movie_desc"]);
$movie_genre=mysqli_real_escape_string($conn,$_POST["movie_genre"]);

$sql = "UPDATE online_movie_sys_movie SET movie_name='{$movie_name}' , Mov_img='{$file_name}' , release_date='{$release_date}' ,trailer='{$movie_trailer}' ,descrpt='{$movie_desc}' ,genre_id={$movie_genre}
        WHERE movie_id={$movie_id}";        

        $result = mysqli_query($conn,$sql);
        if ($result) 
        {
            header("Location: Movie.php");                     
        }
        else{

            echo "Query Failed";
        }

?>


