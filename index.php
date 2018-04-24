<?php
	require('config/dbconn.php');
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
			<form name="user_form" method="post" action="insert.php" >
				<label for="username">Username</label> <br>
				<input type="text" name="username" required>
				<br><br>
				<label for="useraddress">Address</label> <br>
				<input type="text" name="useraddress" required>
				<br><br>
				<label for="dob">Date of birth</label> <br>
				<input type="date" name="dob"><br> <br>
				<label for="useremail">Email</label><br>
				<input type="email" name="useremail"><br><br>
				<input type="submit" name="submit">
			</form>
		</div>
		<a href="showall.php" style="display: flex; justify-content: center;">Show Table</a>
	</div>
</body>
</html>





