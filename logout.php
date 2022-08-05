<?php

session_start();


if(isset($_SESSION['session_username'])){
    session_destroy();
    header('location:login.php');
}
?>