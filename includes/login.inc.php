


<?php 
session_start();
require "dbh.inc.php";
require "function.inc.php";

$email=$_POST['email'];
$password=$_POST['pwd'];


if (empty($email)|| empty($password)) {
 	header("Location: ../login.php?error=emptyfields");
 	exit();
 }else{
 	$sql="SELECT * FROM user_table WHERE email=?;";
 	$stmt=mysqli_stmt_init($conn);
 	if(!mysqli_stmt_prepare($stmt,$sql)){
	header("Location: ../login.php?sqlerror");
	exit();
	}else{
		mysqli_stmt_bind_param($stmt,"s",$email);
		mysqli_stmt_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		if($row=mysqli_fetch_assoc($result)){
			$pwdVer=Password_enc($password);
			if ($pwdVer!==$row["pwd"]) {
				header("Location: ../login.php?error=invalid_email_or_password");
				exit();
			}else{
				$_SESSION["email_session"]=$row["email"];
				$_SESSION["uid_session"]=$row["uid"];
				$_SESSION["name_session"]=$row["name"];
				$_SESSION['phone_session']=$row['phone_no'];

				header("Location: ../afterlogin.php?login=success");
				exit();
			}
	   }
    }
}

 ?>