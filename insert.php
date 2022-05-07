<?php

if(isset($firstname)){
include ("connection.php");
$firstname= mysqli_real_escape_string( $con,$_POST['firstname']);
$secondname =   mysqli_real_escape_string($con,$_POST['secondname']);
$age=   mysqli_real_escape_string( $con,$_POST['age']);
$dob=  myspli_real_escape_string($con,$_POST['dob']);
$query=" INSERT INTO user (firstname,secondname,age,dob) VALUES ('$firstname','$secondname','$age','$dob')";
mysqli_query($query,$con);
 
}

?>