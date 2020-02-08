<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  body {
    background: #C5E1A5;
}

.form-class {
    width: 60%;
    margin: 60px auto;
    background: #efefef;
    padding: 60px 120px 80px 120px;
    text-align: center;
    -webkit-box-shadow: 2px 2px 3px rgba(0, 0, 0.1);
    box-shadow: 2px 2px 3px rgba(0, 0, 0.1);
}

label {
    display: block;
    position: relative;
    margin: 40px 0px;
}

.label-txt {
    position: absolute;
    top: -1.6em;
    padding: 10px;
    font-family: sans-serif;
    font-size: .8em;
    letter-spacing: 1px;
    color: rgb(120, 120, 120);
    transition: ease .3s;
}

.input {
    width: 100%;
    padding: 10px;
    background: transparent;
    border: none;
    outline: none;
}

.line-box {
    position: relative;
    width: 100%;
    height: 2px;
    background: #BCBCBC;
}

.line {
    position: absolute;
    width: 0%;
    height: 2px;
    top: 0px;
    left: 50%;
    transform: translateX(-50%);
    background: #8BC34A;
    transition: ease .6s;
}

.input:focus+.line-box .line {
    width: 100%;
}

.label-active {
    top: -3em;
}

button {
    display: inline-block;
    padding: 12px 24px;
    background: rgb(220, 220, 220);
    font-weight: bold;
    color: rgb(120, 120, 120);
    border: none;
    outline: none;
    border-radius: 3px;
    cursor: pointer;
    transition: ease .3s;
}

button:hover {
    background: #8BC34A;
    color: #ffffff;
}
</style>
 <script >
   $(document).ready(function() {

$('.input').focus(function() {
    $(this).parent().find(".label-txt").addClass('label-active');
});

$(".input").focusout(function() {
    if ($(this).val() == '') {
        $(this).parent().find(".label-txt").removeClass('label-active');
    };
});

});
 </script>
</head>
<body>

<?php
     include 'navbarafterlogin.php';
     ?>
 <div class="container">
    <form class="form-class" action="donatesubmit.php" method="post">
    <div class="form-group">
   
    <label><h2> <p class="label-txt">Thank you for your helping hands</p></h2> </label>
    <br>
      <div class="container">
    <h3>  For Food</h3>
    <br>
    <label> Types of food:</label>
    <br>
    <select  id="exampleFormControlSelect1" name="foodtype">
      <option>Veg</option>
      <option>Non Veg</option>
      <option>Both</option>
      
    </select>


    
    <br>
    <label>
    Pickup Location:
    </label>
    <input class="" type="text" name ="donorlocation">
    <br>
    <label>
    Food will remain fresh for:
    </label>
    <input class="" type="number" name ="freshtime">
    <small class="form-text text-muted">Enter time for which the food remains fresh eg:10 hours</small>
    <br>
    <label>No of people</label>
    <input class="" type="number" name="no_people">
    <small class="form-text text-muted">Enter the number of people your food can serve</small>
    </div>
<h3>For clothes</h3>
<br>
<label>
    No of clothes:
    </label>
    <input class="" type="number" name ="no_clothes">
    <br>
    <label>
    Age group
    </label>
    <select  id="exampleFormControlSelect1" name="agegroup">
      <option>0-5</option>
      <option>5-13</option>
      <option>13-20</option>
      <option>20-30</option>
      <option>30-50</option>
      <option>50+</option>
    </select>
    <br>
    <br>
    <button class="btn btn-primary btn-md" type="submit" name="submit">Submit</button>
    </form>
    </div>
</body> 
</html>