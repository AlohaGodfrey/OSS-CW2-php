<?php

    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");
    // Connect to server and select database

    require_once ("vendor/autoload.php");

    $faker = Faker\Factory::create();

    $image = $_FILES['studentimage']['tmp_name'];
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));

    $sql = "INSERT INTO student (studentid, image, password, dob, firstname, lastname, house, town, county, country, postcode) 
    VALUES ('$_POST[sid]','$imagedata','$_POST[passwd]','$_POST[dob]','$_POST[fName]',
    '$_POST[lName]','$_POST[Address]','$_POST[town]','$_POST[county]','$_POST[country]','$_POST[postcode]')";

    // Execute sql statement
    mysqli_query($conn, $sql);
    header("Location:addstudent.php")
?>