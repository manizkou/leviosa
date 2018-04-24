<?php
	require('config/dbconn.php');

	if ($_GET['id']!=NULL) {
	//get id
	$id = mysqli_real_escape_string($conn,$_GET['id']);

	//create query

	$sql="SELECT * FROM user_info where uid=".$id;

	//or
	// $sql="SELECT * FROM user_info where uid='$id' ";

	//get result

	$result= mysqli_query($conn,$sql);

	//fetch data

	$row = mysqli_fetch_assoc($result);

	//free result

	mysqli_free_result($result);

	//close connection

	mysqli_close($conn);
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.form_wrapper{
			background-color: #FFFFCC;
			display: flex;
			justify-content: center;
			padding:20px 20px;
			margin:10px; 
		}
		.container{
			background-color: #C6BACD;
			padding: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="form_wrapper">
			<form name="user_form" method="post" action="edit.php" >
				<label for="username">Username</label> <br>
				<input type="text" name="username" required value="<?php echo $row['name']; ?>">
				<br><br>
				<label for="useraddress">Address</label> <br>
				<input type="text" name="useraddress" required  value="<?php echo $row['address']; ?>">
				<br><br>
				<label for="dob">Date of birth</label> <br>
				<input type="date" name="dob"  value="<?php echo $row['dob']; ?>"><br> <br>
				<label for="useremail">Email</label><br>
				<input type="email" name="useremail"  value="<?php echo $row['email'];?>"><br><br>
				<input type="hidden" name="update_id" value="<?php echo $row['uid']; ?>" >
				<input type="submit" name="update" value="UPDATE">
			</form>
		</div>
		<a href="showall.php" style="display: flex; justify-content: center;">Show Table</a>
	</div>
</body>
</html>





