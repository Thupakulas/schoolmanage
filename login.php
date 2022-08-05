<?php 

include 'database.php';


if(isset($_POST['loginbtn'])){
    $logname=$_POST['loginusername'];
    $logpassword=$_POST['loginpassword'];
    //echo $logname;

    $checklognameinDB=mysqli_query($conn, "select * from register WHERE username='$logname'");
    $countchecklognameinDB=mysqli_num_rows($checklognameinDB);

    if($countchecklognameinDB == 0){
        echo 'no user details found';
    }
    else{

        while($row=mysqli_fetch_array($checklognameinDB)){
            $regnam=$row['username'];
            $regpwd=$row['password'];
        }
        if($logname == $regnam && $logpassword == $regpwd){
            session_start();

            $_SESSION['session_username']=$regnam;
            $_SESSION['session_pwd']=$regpwd;
       
$_SESSION['session_id']=$sessionid;


            echo 'login success';
             header('location:dashboard.php');
        }
        else{
            echo 'username and password didn;t match ';
        }
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
            
<form action="" method="post">
<div class="mb-3 mt-3">
    <label for="Username" class="form-label">Name:</label>
    <input type="text" class="form-control" id="loginusername" name="loginusername" placeholder="Enter username">
  </div>
  <!-- <div class="mb-3 mt-3">
    <label for="rollno" class="form-label">Roll No:</label>
    <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" name="rollno">
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">class:</label>
    <input type="text" class="form-control" id="class" placeholder="Enter class" name="class">
  </div> -->
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" name="loginpassword">
  </div>
 

  <button type="submit" name="loginbtn" class="btn btn-primary">Submit</button>
</form>
    Not registered yet?<a href="register.php">Register</a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>