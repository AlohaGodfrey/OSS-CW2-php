<html>
    <head>
    </head>
    <body>
        <form method ="post" action="deleteStudentRecord.php">
            <table border ="1">
            <tr>
            <th>Student List</th>
            <th>Student List</th>
            <th>Student List</th>
            </tr> 

            <?php
            include("_includes/dbconnect.inc");
            //header("Content-type: image/jpeg");
            $sql = "SELECT * FROM student"; 
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_array($result)){  
            echo "<tr><td>" . $row['studentid'] . "<td><img src='getjpg.php?id=" . $row['studentid']. "' height='100' width='100'></td>" . "</td><td>" . $row['dob'] . "</td><td>" . $row['firstname'] 
            . "</td><td>" . $row['lastname'] . "</td><td>" . $row['house'] . "</td><td>" . $row['town'] 
            . "</td><td>" . $row['county'] . "</td><td>" . $row['country'] . "</td><td>" . $row['postcode'] 
            . "</td><td><input type ='checkbox' name='checkbox[]' value='".$row['studentid']."'></td>" . "</tr>";
            
            }


            echo "</table>";  
            ?>
            <input type="submit" name="delete" id="delete" value ="Delete Records">
        </form>
    </body>
    
</html>
    

