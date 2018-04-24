<?php
require('config/dbconn.php');

	if(!isset($_POST['update'])){
		echo "nothing submitted";
	}else{
			$name = mysqli_real_escape_string($conn,$_POST['username']);
			$address =  mysqli_real_escape_string($conn,$_POST['useraddress']);
			$dob =  mysqli_real_escape_string($conn,$_POST['dob']);
			$email = mysqli_real_escape_string($conn,$_POST['useremail']);
			$id=mysqli_real_escape_string($conn,$_POST['update_id']);

			$insertquery= "UPDATE user_info SET 
						name='$name',
						address='$address',
						dob='$dob',
						email='$email' 
						WHERE uid = $id ";

		// $result =mysqli_query($conn,$insertquery);

		if(!mysqli_query($conn,$insertquery)){
			echo"try again boss";
			echo"ERROR".mysqli_error($conn);
		}else{
			header ("Location:showall.php");
			// echo"You are a billionaire"; 
			echo"Congratulations, you have updated :)";
		}
	}
?>