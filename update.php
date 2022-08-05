<?php


include 'database.php';
session_start();


$session_name=$_SESSION['session_username'];
$session_pwd=$_SESSION['session_pwd'];

//$sername=$_SESSION['session_username'];
echo $session_name;
$updat=mysqli_query($conn, "select * from register WHERE username='$session_name' ");

while($row=mysqli_fetch_array($updat)){
    $upname=$row['username'];
    $upclass=$row['class'];
    $uproll=$row['rollno'];
    // echo $uproll;
}

if(isset($_POST['update'])){
    $rollno=$_POST['rollno'];
    $class=$_POST['class'];


    echo $rollno;

$upd=mysqli_query($conn, "update register set rollno='$rollno', class='$class'");
    if($upd){
        echo 'updated success';
        header('location:update.php');
    
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
    <input type="text" class="form-control" id="name" name="username"value=<?php echo $upname ;?>    readonly placeholder="Enter username">
  </div>
  <div class="mb-3 mt-3">
    <label for="rollno" class="form-label">Roll No:</label>
    <input type="text" class="form-control" id="rollno" placeholder="Enter rollno" value=<?php echo $uproll ;?> name="rollno">
  </div>
  <div class="mb-3">
    <label for="class" class="form-label">class:</label>
    <input type="text" class="form-control" id="class" placeholder="Enter class" value=<?php echo $upclass ;?> name="class">
  </div>
  <!-- <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div> -->
 

  <button type="submit" name="update" class="btn btn-primary">update</button>
</form>
<!-- Click here to login<a href="login.php">  Login</a> -->
    
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>