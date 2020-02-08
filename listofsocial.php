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
    include "bootstrap.php";
    include "includes/dbh.inc.php";
    include "navbarafterlogin.php";
    ?>
    <br>
    <br>
    <br>
    <?php
    require "includes/function.inc.php";
    $feed= "select * from user_table where type = 'Social Worker' ";
    $runfeed = mysqli_query($conn,$feed);
    while($rowfeed = mysqli_fetch_array($runfeed)){
        $uid = $rowfeed['uid'];
        $name= $rowfeed['name'];
        $address = $rowfeed['address'];
        $phone_no = $rowfeed['phone_no'];
       ShowOrganizationList($name,$phone_no,$address,$uid);

    }

    ?>
</body>
</html>