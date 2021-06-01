<?php
include("_includes/dbconnect.inc");

if(isset($_POST['delete'])){
    $chkarr = $_POST['checkbox'];
    foreach($chkarr as $id){
        mysqli_query($conn, "Delete From Student Where studentid=".$id);
    }
    header("Location:students.php");
}



?>