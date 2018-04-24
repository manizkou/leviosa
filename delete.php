<?php 
	require('config/dbconn.php');

	//get id
	$id= mysqli_escape_string($conn,$_GET['id']);

	//select row sql

	$sql = "DELETE FROM user_info WHERE uid=".$id;

	//check

	if(!mysqli_query($conn,$sql)){
		echo"sorry";
	}else{
		Header("Location:showall.php");
	}


?>