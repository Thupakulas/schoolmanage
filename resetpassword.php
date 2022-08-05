<?php
include 'database.php';

session_start();
$session_name=$_SESSION['session_username'];
// $session_id=$_SESSION['session_id'];


$sessid=$_SESSION['session_id'];


$passwordget=mysqli_query($conn, "select * from register where username='$session_name'");
    

$row=mysqli_fetch_array($passwordget);
    $repwd=$row['password'];
    $reusername=$row['username'];
    



echo $reusername;
echo $repwd;
if(isset($_POST['resetpwdbtn'])){

    $rpassword=$_POST['respassword'];
    $rconpassword=$_POST['conpassword'];

    // $passwordget=mysqli_query($conn, "select * from register where username='$session_name'");

  


    if($repwd == $rpassword){

        echo ' updated success';
    $rest=mysqli_query($conn, "update register set  password='$rconpassword' where username='$session_name'");

    }
    else{
        echo 'not updated';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

        <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="style.css" />
</head>
<body>
<div class="container" style="margin-top:5%">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form method="post">

<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="password" name="respassword" placeholder="Password">
</div>
<div class="form-group">
  <label for="conpassword">Confirm Password</label>
  <input type="password" class="form-control" id="conpassword" name="conpassword" aria-describedby="emailHelp" placeholder="Enter password">
</div>
<button type="submit" name="resetpwdbtn" class="btn btn-primary">Submit</button>
</form> 
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>