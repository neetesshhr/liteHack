
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(isset($_POST['submit'])){


$uid=$_SESSION['uid_session'];
$name=$_SESSION['name_session'];
$email=$_SESSION['email_session'];
echo $uid;
$foodtype = $_POST['foodtype'];
$donorlocation = $_POST['donorlocation'];
$freshtime = $_POST['freshtime'];
$no_people = $_POST['no_people'];
$no_clothes = $_POST['no_clothes'];
$agegroup = $_POST['agegroup'];

//connections
$dbservername="localhost"	;
	$dbusername="root";
	$dbpassword="";
	$dbName="hacklite";
	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbName);
	if(!$conn){
		die("Connection Failed:".mysqli_connect_error());
	}

$sql = "INSERT INTO donate(uid,Name,email,foodtype,donorlocation,freshtime,no_people,no_clothes,agegroup) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "Sql failed";

}else{
    mysqli_stmt_bind_param($stmt,"issssiiii",$uid,$name,$email,$foodtype,$donorlocation,$freshtime,$no_people,$no_clothes,$agegroup);
    mysqli_stmt_execute($stmt);
    header("Location: afterlogin.php?success=inserted_in_table");
}


$result = mysqli_query($conn,$query);
if($result){
    echo "<script>alert('data inserted into the table')</script>";
    }else{
        echo"query failed";
    }
    mysqli_close($conn);
}



?>  
</body>
</html>
