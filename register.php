<?php
include 'database.php';

if(isset($_POST['registerbtn'])){
    $regname=$_POST['username'];
    $regrollno=$_POST['rollno'];
    $regclass=$_POST['class'];
    $regpassword=$_POST['password'];
    $date=date('d-m-Y');

    $verifyuserinDB=mysqli_query($conn, "select * from register where username='$regname' or class='$regclass'");

    $verdyusercount=mysqli_num_rows($verifyuserinDB);

    if($verdyusercount == 0){

        $register=mysqli_query($conn, "INSERT INTO register(username,rollno,class,password,date) VALUES ('$regname','$regrollno','$regclass','$regpassword','$date')");

        if($register){
           // echo 'reg success';
         //  header('location:login.php');

          //  echo '<script>alert("registered successfully")</script>';
          //  usleep(50000);
        }
        else{
            echo 'not registered';
        }
    }
    else{
        echo 'username already exists, try with another name';
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="style.css" />

</head>
<body>
<div class="container" style="margin-top:5% ">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            
<form action="" method="post" id="regform">
<div class="mb-3 mt-3">
    <label for="Username" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" name="username" placeholder="Enter username">
  </div>
  <div class="mb-3 mt-3">
    <label for="rollno" class="form-label">Roll No:</label>
    <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno">
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">class:</label>
    <input type="text" class="form-control" id="class" placeholder="Enter class" name="class">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>
 

  <button type="submit" name="registerbtn" id="registerbtn" class="btn btn-primary">Submit</button>
</form>
Click here to login<a href="login.php">  Login</a>
    
        </div>
        <div class="col-md-2"></div>
    </div>


   
</div>

<!-- <script>


$(document).ready(function(){

  function jsondata(regform){
    
    var array=$("#regform").serializeArray();
  
   var obj={};
  for(a=0;a<array.length;a++){
    obj[array[a].name]=array[a].value;
  }



  var jstring=JSON.stringify(obj);


  return jstring;

  }

  $("#registerbtn").on("click",function(e){
    e.preventDefault();

var objstring=jsondata
 
  })
})
  </script> -->
</body>
</html>