<?php 
	// $dbservername="192.168.137.243"	;
	$dbservername="localhost";

	$dbusername="root";
	$dbpassword="";
	$dbName="hacklite";

	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbName);

	if(!$conn){
		die("Connection Failed:".mysqli_connect_error());
	}

