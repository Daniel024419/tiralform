<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>USER INFORMATION</title>
</head>
<body>

<div class="wrapper">
    <div class="header">
        <div>
              Contact Informatiohn form
        </div>
      
    </div>
<form action="" method="POST" class="formbody">
    <label for="firstname" class="lbl">FirstName:
    <input type="text" id="firstname" name="firstname" required autocomplete="none" maxlength="15">
 </label>
 
 <label for="secondname"  class="lbl">SecondName:
     <input type="text" name="secondname" id="secondname"  required autocomplete="none">
 </label>
 
 <label for="age"  class="lbl">Age:
     <input type="number" name="age" id="age" required maxlength="200">
 </label>
 <label for="dob"  class="lbl">DateOFBirth:
     <input type="date" name="dob" id="dob" required>
 </label>
 <div class="controls">


 <input type="submit" name="subbtn" class="subbtn" value="Submit">
 <input type="reset" name="subbtn" class="resetbtn" value="Reset"> 

</div>
 <p id="msg"> 
     <span class="msg">
 
     </span>
 </p>
</form> 
</div>
<?php
  
 if (isset($_POST["firstname"])){

 include ("connection.php");
$firstname= mysqli_real_escape_string( $con, $_POST["firstname"]);
$secondname =   mysqli_real_escape_string($con, $_POST["secondname"]);
$age=   mysqli_real_escape_string($con, $_POST["age"]);
$dob=mysqli_real_escape_string ($con, $_POST["dob"]);
$query="INSERT INTO user (firstname,secondname,age,dob) 
VALUES ('$firstname','$secondname','$age','$dob')";
$result =mysqli_query($con,$query);
 if($result>0){

     
     echo"
     
     <script>
    alert ('data stored sucessfully');
    window.location.href='index.php';</script>
      ";
 }


 }

?>

 
</body>

</html>