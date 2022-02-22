
<?php
include_once "controller/c_user.php";
if(isset($_SESSION['user']))
{
    header("Location:shop.php");
    die();
}

$c_user = new c_user();
$c_user->register();
