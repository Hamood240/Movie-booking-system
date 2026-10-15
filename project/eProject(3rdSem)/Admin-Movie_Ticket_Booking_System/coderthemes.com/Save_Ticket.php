



<?php


	include 'config.php';

	if (isset($_POST['movie_data'])) 
	{
		

		$movie_id =   $_POST['movie_data'];
	
		$sql = "SELECT online_movie_sys_theater.theater_name,online_movie_sys_theater_movie.movie_theater_id FROM online_movie_sys_theater_movie
				LEFT JOIN online_movie_sys_theater ON online_movie_sys_theater_movie.theater_id = online_movie_sys_theater.theater_id
				WHERE movie_id = $movie_id";
	
		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
	
		$str = '<option value="" disabled selected>Select Theater</option>';
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['movie_theater_id']}'>{$row['theater_name']}</option>";
		}				
	
	}
	elseif(isset($_POST['theater_data']))
	{

		$theater_id =   $_POST['theater_data'];
	
		$sql = "SELECT * FROM online_movie_sys_timing
		WHERE movie_theater_id = $theater_id";
		echo $theater_id;

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");	
		
        $str = '<option value="" disabled selected>Select Date</option>';
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['timing_id']}'>{$row['date']}</option>";
		}
		
        
	}
	elseif(isset($_POST['date_data']))
	{

		$date_id = $_POST['date_data'];
		
		$sql = "SELECT * FROM online_movie_sys_timing WHERE timing_id = $date_id";
		

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
		 
        $str = '<option value="" disabled selected>Select Time</option>';
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['timing_id']}'>{$row['start_time']}</option>";
		}
		
        
	}
	elseif(isset($_POST['time_data']))
	{

		$time_id = $_POST['time_data'];
		
		$sql = "SELECT * FROM online_movie_sys_timing WHERE timing_id = $time_id";
		

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
		$row = mysqli_fetch_assoc($query);
        $str = '<option value="" disabled selected>Select Time</option>';
		$str .= "<option value='{$row['timing_id']}'>Gold Seat Price : {$row['gold_seat_prce']} </option>";
		$str .= "<option value='{$row['timing_id']}'>Platinum Seat Price : {$row['platinum_seat_prce']} </option>";
		$str .= "<option value='{$row['timing_id']}'>Box Class Seat Price : {$row['box_class_seat_prce']} </option>";	
        
	}

	echo $str;


 ?>
