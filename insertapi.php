<?php

header('content-type:application/json');
header('Access-Control-Allow_Origin:*');
include 'database.php';

$sql="select * from register";

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    $insert=mysqli_fetch_all($result, MYSQLI_ASSOC);
   echo  json_encode($insert);
    echo 'data inserted successfully';
}
else{
    echo json_encode(array('message'=>"No data found",
    'status'=>false));
}


?>