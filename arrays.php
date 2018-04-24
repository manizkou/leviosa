<?php 
	
	//Indexed
	//Associative
	//multi dimensional

	//Indexed

	$people = array("Happy", "Hello", "How");
	// echo $people[1];
	$num = array(10, 100 ,10000);
	// echo $num[2];
	$person = ['Jude','Julio','Romeo'];
	$person[3] = 'June';
	$person[] = 'Max';
    // echo $person[0];
    // echo $person [3];
    // echo $person[4];

	// echo count ($person);
	 // print_r($person);
	 // var_dump($person);

	//Assciative arrays

	$people = array("Max"=>100,"June"=>20, "Jude"=> 40);
	$cars = [1=>'Ford', 2=>'Toyota', 3=>'Jaguar'];

	// echo $people['Max'];
	// echo $cars[1];
	// $people['Jill'] = 60;
	// echo $people['Jill'];
	// print_r($people);
	// var_dump($people);

	//Multi-dimensional

	$cars = array(
		array('Ford',20,10),
		array('Ferrari',30,15),
		array('Jaguar',20,5)
	);

	// echo $cars[0][0];
	// echo $cars[1][1];
	// echo $cars[2][2];
	 // print_r($cars);
	// var_dump($cars);

	 $carss = array(
	 	['Ford'=>2,'Jaguar'=>3],
	 	['Ferrari'=>2,'Jaguar'=>3],
	 	['Gold'=>2,'Platinum'=>3],
	 );

	 // echo $carss[0]['Ford'];
	 print_r($carss);


?>