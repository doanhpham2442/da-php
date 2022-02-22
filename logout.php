<?php
include_once ("controller/c_user.php");
if(isset($_GET['func'])  == 'exit' ){

    $c_user = new c_user();
    $c_user->logout();
}

header('Location: login.php');
