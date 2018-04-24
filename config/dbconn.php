<?php 
	// create connection
	$conn = mysqli_connect('localhost','root','','leviosa');
	// print_r($conn);
	// die();
// check connection
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL", mysqli_connect_errno();
	}
// or also

	if(!$conn){
		die("connection failed:" . mysqli_connect_error());
	}else{
		echo("Connected succesfully");
	}

?>