<?php

include 'database.php';


// header('content-type : application/json');
// header('Access-Control-Allow-Origin:*');
// header('Access-Control-Allow-Methods:POST');
// header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,
// Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');


header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$data=json_decode(file_get_contents("php://input"));


 $reguser=$data->username;
 $regroll=$data->rollno;
 $regclass=$data->classname;
$regpwd=$data->password;


// $reguser=$data['username'];
// $regroll=$data['rollno'];
// $regclass=$data['classname'];
// $regpwd=$data['password'];



include 'database.php';

$sql="insert into register (username,rollno,class,password) VALUES('$reguser','$regroll','$regclass','$regpwd')";

$result=mysqli_query($conn, $sql);

if($result){
//     $insert=mysqli_fetch_all($result, MYSQLI_ASSOC);
//    echo  json_encode($insert);
   // echo 'data inserted successfully';

   $makearray=
    [
'status' =>true,
'message'=>'Inserted success'
    ];

    echo json_encode($makearray);
   
}
else{
    echo json_encode(array('message'=>"Not inserted",
    'status'=>false));
}
?>