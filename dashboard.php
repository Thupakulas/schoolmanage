<h1>this is after login</h1> <a href="logout.php">LogOut</a>



<a href="update.php">Update</a> your profile 
<?php

include 'database.php';
session_start();
if(isset($_SESSION['session_username'])){
// do nothing
$session_name=$_SESSION['session_username'];
$session_pwd=$_SESSION['session_pwd'];

echo "Hi $session_name ,";

echo "your password is $session_pwd";

// $getdetails=mysqli_query($conn , "se")

$update=mysqli_query($conn, "select * from register where username='$session_name'");



}
else{

header('location:login.php');
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
            
        <table class="table">
  <thead>
    <tr>

      <th scope="col">USERNAME</th>
      <th scope="col">CLASS</th>
      <th scope="col">ROLL NO:</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>



<?php

$getdetails=mysqli_query($conn, "select * from register where username= '$session_name'");

while($row=mysqli_fetch_array($getdetails)){


    $uname=$row['username'];
    $class=$row['class'];
    $roll=$row['rollno'];
    echo $uname;
    echo $class;
    echo $roll;

}


echo '

<tr>
<td> '.$uname.'</td>
<td> '.$class.'</td>
<td> '.$roll.'</td>

<td><a href="update.php">update</a></td>

</tr>
';

// <td>Jacob</td>
// <td>Thornton</td>
// <td>@fat</td>

?>
        </tr>
    
  </tbody>
</table>
  
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>


<h1>this is for reset your password</h1> <a href="resetpassword.php">reset</a>
