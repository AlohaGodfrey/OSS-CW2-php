<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

//studentid, password, dob, firstname, lastname, house, town, county, country, postcode

?>

<html>
<head>
    <h2> Enter New Details </h2>
</head>
<body>
    <form enctype="multipart/form-data" action='addStudentupdate.php' method='post'>
    Enter student id :
    <input type='text' name='sid' /><br/>
    Enter first name :
    <input type='text' name='fName' /><br/>
    Enter last name :
    <input type='text' name='lName'/><br/>
    Enter password :
    <input type='text' name='passwd'/><br/>
    Enter date of birth (YYYY-MM-DD) :
    <input type='text' name='dob'/><br/>
    Enter first line of address :
    <input type='text' name='Address'/><br/>
    Enter town or city :
    <input type='text' name='town'/><br/>
    Enter county :
    <input type='text' name='county'/><br/>
    Enter country :
    <input type='text' name='country'/><br/>
    Enter postcode :
    <input type='text' name='postcode'/><br/><br/>
    Student image :
    <input  type="file" name="studentimage" accept="image/jpeg" class="form-control" />
    <input type='submit' value='Save Data' />
    </form>

</body>
</html>