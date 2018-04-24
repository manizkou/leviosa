<?php 
	require('config/dbconn.php');
?>

<?php 
	if(!isset($_POST['submit'])){
		echo"sorry boss try again";
	}else{
		echo"Congratulations, you have won $100000 :)";

			$name = mysqli_real_escape_string($conn,$_POST['username']);
			$address =  mysqli_real_escape_string($conn,$_POST['useraddress']);
			$dob =  mysqli_real_escape_string($conn,$_POST['dob']);
			$email = mysqli_real_escape_string($conn,$_POST['useremail']);

		$insertquery= "INSERT INTO user_info (name,address,dob,email) VALUES ('$name','$address','$dob','$email')";

		// $result =mysqli_query($conn,$insertquery);

		if(!mysqli_query($conn,$insertquery)){
			echo"try again boss";
			echo"ERROR".mysqli_error($conn);
		}else{
			header ("Location:showall.php");
			echo"You are a billionaire"; 
		}
	}
	
?>

<html>
<body>
	<br>
	<a href="index.php">Previous Page</a>
	<br>
	<a href="showall.php">Next Page</a>

</body>
</html>