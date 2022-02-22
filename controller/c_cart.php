<?php
session_start();
include_once "models/m_product.php";
class c_cart{

    public function showCart(){
        $user = [];
        $tong = $totalqty = 0;
        $cartList = [];
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        }
        if(isset($_SESSION['tong']))
        {
            $tong = $_SESSION['tong'];
        }
        if(isset($_SESSION['totalqty']))
        {
            $totalqty = $_SESSION['totalqty'];
        }
        if(isset($_COOKIE['cart'])) {
            $json = $_COOKIE['cart'];
            $cart = json_decode($_COOKIE['cart'], true);
        }
        if(isset($_SESSION['cartList'])){
            $cartList = $_SESSION['cartList'];

            $view = "views/cart/v_cart.php";
            require_once "templates/cart/layouts.php";
        }
        else{
            $_SESSION['message'] = "Giỏ hàng trống vui lòng mua hàng";
            header('Location:shop.php');
        }

    }
}