<?php
	require('config/dbconn.php');

	$sql = "SELECT * FROM user_info ORDER BY uid ASC ";
	//create query

	// echo $sql;
	// die();
	
	//create result
	$result = mysqli_query($conn, $sql);
	// print_r($result);
	// die();
	// echo "hello";

	 //fetch data
	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// var_dump($user_data);
	// //free result
	mysqli_free_result($result);

	// //close connection
	mysqli_close($conn);
?>

<html>

<body>
	<div>
		<table>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>ADDRESS</th>
				<th>DOB</th>
				<th>EMAIL</th>
				<th>OPTIONS</th>
			</tr>
			<?php
			// if(mysqli_num_rows($result) > 0){
				// while ($row=mysqli_fetch_assoc($result)) {
			foreach($rows as $row){
			?>	
			<tr>
				<td>
				<?php echo $row["uid"]; ?>		
				</td>
				<td>
				<?php echo $row["name"]; ?>		
					
				</td>
				<td>
				<?php echo $row["address"]; ?>		
					
				</td>
				<td>
				<?php echo $row["dob"]; ?>		
					
				</td>
				<td>
				<?php echo $row["email"]; ?>		
					
				</td>
				<td>
					<a href="update.php?id=<?php echo $row['uid']; ?>">UPDATE</a>
					<a href="delete.php?id=<?php echo $row['uid'] ?>">DELETE</a>
				</td>
			</tr>
			
			<?php
				// }
			}
			?>
		</table>
	</div>
	<div>
		<a href="insert.php">Previous Page</a><br>
		<a href="index.php"> Home Page</a>

	</div>
</body>

</html>