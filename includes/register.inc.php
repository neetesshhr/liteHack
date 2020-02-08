<?php 
require "dbh.inc.php";
require "function.inc.php";

if (isset($_POST['submitFromPerson'])) {
	$person_name=$_POST['person_name'];
	$person_address=$_POST['person_address'];
	$person_email=$_POST['person_email'];
	$person_phone=$_POST['person_phone'];
	$person_pwd=$_POST['person_pwd'];
	$person_confirmpwd=$_POST['person_confirmpwd'];
	$type="Person";
	if (empty($person_name)||empty($person_address)||empty($person_email)||empty($person_phone) || empty($person_pwd) || empty($person_confirmpwd)) {
			header("Location: ../register.php?error=emptyfields");
			exit();
		//To check for valid email
		}elseif(!filter_var($person_email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../signup.php?error=invalidemail");
			exit();
		}elseif($person_pwd!==$person_confirmpwd){
			header("Location: ../signup.php?error=passworddonotmatch");
			exit();
		}elseif(strlen($person_pwd)<6){
			header("Location: ../signup.php?error=weakpassword");
			exit();
		}else{
			$sql="INSERT into user_table(name,address,email,phone_no,pwd,type) VALUES(?,?,?,?,?,?)";
			$stmt=mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
				echo "Failed sql";
			}else{
				$hpassword=Password_enc($person_pwd);
				mysqli_stmt_bind_param($stmt,"ssssss",$person_name,$person_address,$person_email,$person_phone,$hpassword,$type);
				mysqli_stmt_execute($stmt);
				header("Location: ../register.php?success=registered");
			}
		}









}else if(isset($_POST["submitFromOrganization"])){
	$org_name=$_POST['name_org'];
	$org_address=$_POST['address_org'];
	$org_email=$_POST['email_org'];
	$org_phone=$_POST['phone_org'];
	$org_pwd=$_POST['pwd_org'];
	$org_confirmpwd=$_POST['confirmpwd_org'];
	$type="Organization";
	if (empty($org_name)||empty($org_address)||empty($org_email)||empty($org_phone) || empty($org_pwd) || empty($org_confirmpwd)) {
			header("Location: ../register.php?error=emptyfields");
			exit();
		//To check for valid email
		}elseif(!filter_var($org_email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../signup.php?error=invalidemail");
			exit();
		}elseif($org_pwd!==$org_confirmpwd){
			header("Location: ../signup.php?error=passworddonotmatch");
			exit();
		}elseif(strlen($org_pwd)<6){
			header("Location: ../signup.php?error=weakpassword");
			exit();
		}else{
			$sql="INSERT into user_table(name,address,email,phone_no,pwd,type) VALUES(?,?,?,?,?,?)";
			$stmt=mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
				echo "Failed sql";
			}else{
				$hpassword=Password_enc($org_pwd);
				mysqli_stmt_bind_param($stmt,"ssssss",$org_name,$org_address,$org_email,$org_phone,$hpassword,$type);
				mysqli_stmt_execute($stmt);
				header("Location: ../register.php?success=registered");
			}
		}






}else if(isset($_POST["submitFromSocialWorker"])){
	$social_name=$_POST['social_name'];
	$social_address=$_POST['social_address'];
	$social_email=$_POST['social_email'];
	$social_phone=$_POST['social_phone'];
	$social_pwd=$_POST['social_pwd'];
	$social_confirmpwd=$_POST['social_confirmpwd'];
	$type="Social Worker";
	if (empty($social_name)||empty($social_address)||empty($social_email)||empty($social_phone) || empty($social_pwd) || empty($social_confirmpwd)) {
			header("Location: ../register.php?error=emptyfields");
			exit();
		//To check for valid email
		}elseif(!filter_var($social_email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../register.php?error=invalidemail");
			exit();
		}elseif($social_pwd!==$social_confirmpwd){
			header("Location: ../register.php?error=passworddonotmatch");
			exit();
		}elseif(strlen($social_pwd)<6){
			header("Location: ../register.php?error=weakpassword");
			exit();
		}else{
			$sql="INSERT into user_table(name,address,email,phone_no,pwd,type) VALUES(?,?,?,?,?,?)";
			$stmt=mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
				echo "Failed sql";
			}else{
				$hpassword=Password_enc($social_pwd);
				mysqli_stmt_bind_param($stmt,"ssssss",$social_name,$social_address,$social_email,$social_phone,$hpassword,$type);
				mysqli_stmt_execute($stmt);
				header("Location: ../register.php?success=registered");
			}
		}

}

 ?>