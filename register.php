
<html>
    <head>
        <style type='text/css'>
            span {
                text-decoration:underline;
                color:blue;
                cursor:pointer;
            }
        </style>
        <script>
            // show the given page, hide the rest
            function show(elementID) {
                // try to find the requested page and alert if it's not found
                var ele = document.getElementById(elementID);
                if (!ele) {
                    alert("no such element");
                    return;
                }
                // get all pages, loop through them and hide them
                var pages = document.getElementsByClassName('page');
                for(var i = 0; i < pages.length; i++) {
                    pages[i].style.display = 'none';
                }
                // then show the requested page
                ele.style.display = 'block';
            }
        </script>
        <title>Register</title>
    </head>
    <body>
    <?php
    include 'bootstrap.php';
    include 'header.php';
    ?>
     <div class="container">
     <?php
   //include 'navbar.php';
   ?> </div>
    

  <br>
  <br>
  <br>

    
    <p>
      <h1 class="text-center"> Register as </h1>

            <h5 class="text-center">
            <span class="btn btn-primary card-link" onclick="show('Page1');">Person</span>
            <span class="btn btn-primary card-link"  onclick="show('Page2');">Social Worker</span>
            <span class="btn btn-primary card-link"  onclick="show('Page3');">Organization</span></h5>

        </p>
      
  
    <div id="Page1" class="page" style="">
    
      <div class="container">
      <?php
      include 'person.php'
;      ?>
      </div>
    </div>
    <div id="Page2" class="page" style="display:none">
   
    <div class="container">
    <?php
     include 'socialworker.php';
      ?></div>
    </div>
    <div id="Page3" class="page" style="display:none">
    <div class="container">
    <?php
      include 'organization.php';
      ?>
    </div> </div>

    

    </body>
</html>