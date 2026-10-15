<?php

$Hostname="http://localhost/Eproject%20of%20Movie%20Booking%20System/project/eProject(3rdSem)";
$conn=mysqli_connect("localhost","root","","movie_booking_system") or die("Connection Failed");
//We Create a Connection Now We Just we need to include it when we want to use it.
if(!$conn){
    die('Could not Connect My Sql:' .mysqli_error(die()));
 }

?>