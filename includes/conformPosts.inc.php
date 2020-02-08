<?php 

include 'function.inc.php';
include 'dbh.inc.php';
$uid=$_GET['uid'];
$sql="SELECT * from user_table where uid=?";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
	echo "SQL error";
}else{
	mysqli_stmt_bind_param($stmt,"i",$uid);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	$row=mysqli_fetch_assoc($result);
}

$email=$row['email'];
$uid=$_GET['uid'];
$sub="Social worker wants to colabroate with you";
$body="Hey ther as per your posts to help for food for peoples one of the social worker wants to merge with you to help.The details of social worker will be shown below\n ";
send_email($sub,$body,$email)
 ?>