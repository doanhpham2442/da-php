<?php
@session_start();
include_once "controllers/c_home.php";
if(isset($_SESSION['user_admin']))
{
    $index = new c_home();
    $index->index();
}else{
    header("location:login.php");
}
