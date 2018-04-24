<?php
	
	// $people = array('Sam','Jensen', 'Dean');

	// foreach ($people as $person) {
	// 	echo $person;

	// }

	$people = array('Sam' =>'sam@gmail.com', 'Jensen' => 'Jensen@gmail.com', 'Harry' => 'harry@hogwarts.com');

	foreach ($people as $person => $email) {
		echo $person.":"." ".$email;
	}

?>