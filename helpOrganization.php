<?php 
$uid=$_POST["userid"];
//echo $uid;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Help Organization</title>
</head>
<body>
	<?php 
		include "navbarafterlogin.php";
		include "bootstrap.php";
	 ?>
	
	<div class="container ml-auto mr-auto bg-light mt-auto w-50">
		<form action="includes/contactoOrg.inc.php" method="POST">
			<h4 class="display-4 container">Help Organization</h4>
		 <div class="container">
		 	<div class="form-group">
		 	  <label for="email">What do you want to donate:</label>
		 	  <input type="text" class="form-control  w-75" name="what" id="email">
		 	</div>
		 	<div class="form-group">
		 	  <label for="pwd">No of people you want to help:</label>
		 	  <input type="number" class="form-control  w-75" name="no" id="pwd">
		 	</div>
		 	<input type="hidden" name="uid" value="<?php echo $uid; ?>">
		 <button type="Submit" class="btn btn-primary">Submit</button>
		 </div>
		</form>
	</div>

	
</body>
</html>