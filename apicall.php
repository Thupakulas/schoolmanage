<?php
include 'database.php';
$id=$_GET['id'];


$apicall=mysqli_query($conn, "select * from register where id='$id'");

$checkcount=mysqli_num_rows($apicall);


if($checkcount == 0){
 //   echo 'user details not found';
 $makeapicall=[
    "error"=>true,
    "message"=>'details not found',
 ];

 header('Content-Type: application/json; charset=utf-8');

 echo json_encode($makeapicall);
}
else{
    while($row=mysqli_fetch_array($apicall)){
        $username=$row['username'];
        $class=$row['class'];
        $rollno=$row['rollno'];
    }

    $makeapicall=[
        "name"=>$username,
        "class"=>$class,
        "roll.no"=>$rollno,
    ];

    header('Content-Type: application/json; charset=utf-8');

    echo json_encode($makeapicall);
}
?>