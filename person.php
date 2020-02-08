<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="func.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<?php
        include 'bootstrap.php';
    ?>
     <h3 style="text-align: center; color: #4d79ff; font-family: 'Roboto Mono', monospace; ">For Person</h3>
<form  class="form-class" action="includes/register.inc.php" method="POST" novalidate>
  <label>
    <p class="label-txt"> EMAIL</p>
    <input type="email" class="input" name="person_email" placeholder="Your e-mail" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label> <br>
  
  <label>
    <p class="label-txt"> NAME</p>
    <input type="text" class="input" name="person_name" placeholder="Full name"  required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label> <br>
  <label>
    <p class="label-txt"> PASSWORD</p>
    <input type="password" class="input" name="person_pwd" placeholder="Password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label> <br>
  <label>
    <p class="label-txt">CONFIRM PASSWORD</p>
    <input type="password" class="input"  name="person_confirmpwd" placeholder="Confirm Password" required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label> <br>
  <label>
  <p class="label-txt"> Phone Number</p>
    <input type="number" class="input" name="person_phone" placeholder="Mobile number"  required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label> <br>
  <label>
  <p class="label-txt"> Address</p>
    <input type="text" class="input" name="person_address" placeholder="Adress"  required>
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label> <br>
  <label>
  <p class="label-txt">Verification file </p>
  
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="person_img" required >
    <label class="custom-file-label" for="customFile">Verification file</label>
  </div>
    <div class="line-box"> 
    <div class="line"></div>
    </div>
     
    
  </label> <br>  <br> <br>
  <button type="submit" name="submitFromPerson" >submit</button>
</form> 
 <script>
   $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
 </script>
</body>
</html>


