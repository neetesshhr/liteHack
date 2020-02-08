<?php
include "bootstrap.php";
include "navbarafterlogin.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">

</head>
<body>



<!-- home icon -->
<!--HOME ICON SECTION  -->
   <br>
   <br>

    
<section id="home-icons" class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4 text-center">
              <i class="fas fa-newspaper fa-3x mb-2"></i>
              <h3>Global News 1</h3>
              <p>Food waste ranks as a top emitter of greenhouse gases estimated at 3.3 billion tons of carbon dioxide released into the atmosphere each year.</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
              <i class="fas fa-newspaper fa-3x mb-2"></i>
              <h3>Global News 2</h3>
              <p>3.5 billion acres of land, 28 percent of the world’s agricultural area, is used annually to produce food that’s never eaten.</p>
            </div>
            <div class="col-md-4 mb-4 text-center">
              <i class="fas fa-newspaper fa-3x mb-2"></i>
              <h3>Global News 3</h3>
              <p>More than 20% of all cultivated land, 30% of forests and 10%of grasslands are undergoing degradation</p>
            </div>
          </div>
        </div>
      </section>


</div>
</div> 
<!--  -->
<section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1>Lets get started and help millons of dreams !!</h1>
            <p class="d-none d-md-block">At least 7.8 per cent of Nepalis are undernourished as they do not possess adequate food. The food is also found lacking in quality and quantity.</p>
            <p class="d-none d-md-block">Overweight and obesity increases with wealth and household food ... Nepali obese children may as well be susceptible to such diseases.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--  -->



<h1 class="text-center">List of people who want to donate</h1>
<?php
       include 'bootstrap.php';
       require 'includes/dbh.inc.php';
      

        $query = "SELECT * FROM donate"; //selecting all from table donate
        $result = mysqli_query($conn,$query);
        echo "<table>";
        while($row = mysqli_fetch_array($result)){ //creating a loop
          $Name = $row['Name'];
          $foodtype = $row['foodtype'];
          $donorlocation = $row['donorlocation'];
          $no_people = $row['no_people'];
          $no_clothes = $row['no_clothes'];
          $freshtime = $row['freshtime'];
          $uid=$row['uid'];
           echo "
           <div class='d-flex justify-content-xl-center'>
           <div class='row mb-4 mx-auto'>
           <div class='card bg-dark' style='width:40rem; height:20rem;'>
  <div class='card-body'>
  <h3 class='card-subtitle text-light '>Donor Name:$Name</h3>
  <br>
  <br>
  <br>
    <h6 class='card-subtitle mb-2 text-light'>Type of food:$foodtype</h6>
    <h6 class='card-subtitle mb-2 text-light '>Donor Location:$donorlocation</h6>
    <h6 class='card-subtitle mb-2 text-light '>Number of people can be served from food:$no_people</h6>
    <h6 class='card-subtitle mb-2 text-light '>Number of people can be served from clothes:$no_clothes</h6>
    <h6 class='card-subtitle mb-2 text-light '>Phone no:</h6>
    <a href='includes/conformPosts.inc.php?uid=$uid'><button class='btn btn-primary'>Continue to help</button></a>
   
    
    <br>
    <br>
    <h5 class='text-center card-subtitle mb-2 text-light '>Remains fresh upto :$freshtime PM</h6>
  </div>
</div>
</div>
</div>
           ";
        }
       
       ?>

<footer id="main-footer" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center py-4">
                    <h3 class="text-light">No waste Food</h3>
                    <p class="text-light">Copyright &copy; 2019 <span id="year"></span></p>
                    <button class="btn btn-light text-light" data-toggle="modal" data-target="#contactmodal"><a href="includes/logout.inc.php">Logout</a></button>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

