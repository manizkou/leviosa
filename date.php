<?php
	// echo date('d');
	// echo date('m');
	// echo date('Y');

	// echo date('l'); //day of week

	// echo date('Y/m/d');
	// echo date('d-m-Y');

	// echo date('h'); //hour
	// echo date('i'); //minutes
	// echo date('s'); //secoonds
	// echo date('a'); //am or pm
	
	//Set timezone
	
	date_default_timezone_set('Asia/Kathmandu');
	// echo date('h:i:sa');

	$timestamp = mktime(10, 14, 54, 9, 10, 1981);

	// echo $timestamp;

	// echo date('m/d/Y h:i:sa', $timestamp);
	
	$timestamp2 = strtotime( '4:00a.m April 22 2018');	
	// echo date('m/d/Y h:i:sa', $timestamp2);

	$timestamp3 =strtotime('tomorrow');
	// echo date('d/m/Y h:i:sa', $timestamp3);

	$timestamp4 =strtotime('next Sunday');
	// echo date('d/m/Y h:i:sa', $timestamp4);

	$timestamp5 =strtotime('+2 Days');
	echo date('d/m/Y h:i:sa', $timestamp5);


?>