<?php 
	$dbservername="localhost"	;
	$dbusername="root";
	$dbpassword="";
	$dbName="hackfest";

	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbName);

	if(!$conn){
		die("Connection Failed:".mysqli_connect_error());
	}

