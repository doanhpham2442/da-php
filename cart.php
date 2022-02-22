<?php
include_once "controller/c_cart.php";
if(!isset($_SESSION['user']))
{
    $_SESSION['messege'] = "Vui lòng đăng nhập để tiếp tục";
    $_GET['old_page'] = $_SERVER['REQUEST_URI'];
    header("Location:login.php");
    die();
}
$c_cart = new c_cart();
$c_cart->showCart();
