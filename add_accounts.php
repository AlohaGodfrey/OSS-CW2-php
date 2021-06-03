<?php
    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

    require_once ("vendor/autoload.php");
    $faker= Faker\Factory::create();
    


    for($x = 0; $x <= 5; $x++){

        $sql="INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode)
  
        VALUES ('{$faker->randomNumber($nbDigits = NULL, $strict = false)}','{$faker->password}',
        '{$faker->date($format = 'Y-m-d', $max = 'now')}','{$faker->firstName($gender = 'null'|'male'|'female')}','{$faker->lastName}','{$faker->streetAddress}',
        '{$faker->city}','{$faker->citySuffix}','{$faker->country}','{$faker->postcode}')";
  
     }

     $result = mysqli_query($conn,$sql);
     
      //mysqli_query($conn,$sql)

     // $sql = "insert into student (studentid,password,dob,";
     // $sql = $sql . "firstname,lastname,house,town,county,country,postcode)";
     // $sql = $sql . " values (2100000,$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3LS,1974,";
     // $sql = $sql . "john,jack,24,london,london,london,hp112et);";

     // 


    
?>
