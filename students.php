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

            function data_uri($file, $mime) 
            {  
            $contents = file_get_contents($file);
            $base64   = base64_encode($contents); 
            return ('data:' . $mime . ';base64,' . $base64);
            }

            while($row = mysqli_fetch_array($result)){  
            echo "<tr><td>" . $row['studentid'] ."</td><td>" . data_uri($row['image'],'jpeg') . "</td><td>" . $row['dob'] . "</td><td>" . $row['firstname'] 
            . "</td><td>" . $row['lastname'] . "</td><td>" . $row['house'] . "</td><td>" . $row['town'] 
            . "</td><td>" . $row['county'] . "</td><td>" . $row['country'] . "</td><td>" . $row['postcode'] 
            . "</td><td><input type ='checkbox' name='checkbox[]' value='".$row['studentid']."'></td>" . "</tr>";
            
            }

            //<td><img src='getjpg.php?id=" . $row['image']. "' height='100' width='100'>
            

            echo "</table>";  
            ?>
            <input type="submit" name="delete" id="delete" value ="Delete Records">
        </form>
    </body>
    
</html>
    

