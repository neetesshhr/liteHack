<?php 
$uid=$_POST["uid"];
$what=$_POST["what"];
$no=$_POST["no"];


require 'dbh.inc.php';
require 'function.inc.php';

$sql="SELECT * from user_table where uid=?;";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	echo "SQL error";
}else{
	mysqli_stmt_bind_param($stmt,"i",$uid);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	$row=mysqli_fetch_assoc($result);
	$email=$row["email"];
	$name=$row["name"];
}

$sub="Helping Hands";
$body="Hey ".$name." I want to help your organization for ".$no." people with ".$what."So reply if you are interested";
if(send_email($sub,$body,$email)){
	header("Location: ../index.php?mailsent");
}else{
	echo "Email not sent";
}
	

 ?>
