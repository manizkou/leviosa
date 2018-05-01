<?php
	/* if(isset($_GET['submit_btn'])){
		// print_r($_GET);
		// $name=htmlentities($_GET['name']);
		// echo $name;
		// $email=$_GET['user_email'];
		// echo  $email;
	} 
	if(isset($_POST['submit_btn'])){
		print_r($_POST);
		$name=htmlentities($_POST['name']);
		echo $name;
		$email=$_POST['user_email'];
		echo  $email;
	} */

	// if(isset($_REQUEST['submit_btn'])){
	// 	print_r($_REQUEST);
	// 	$name=htmlentities($_REQUEST['name']);
	// 	echo $name;
	// 	$email=$_POST['user_email'];
	// 	echo  $email;
	// } 

	echo $_SERVER['QUERY_STRING'];
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="get_post.php" method="post">
			<label for="name">Name</label>
			<br>
			<input type="text" name="name" id="name" >
			<br>
			<label for="userEmail">Email</label>
			<br>
			<input type="email" name="user_email" id="userEmail" >
			<br>
			<input type="submit" name="submit_btn">
		</form>
	</body>
</html>