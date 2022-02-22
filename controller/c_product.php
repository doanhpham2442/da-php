<?php
session_start();
include_once "models/m_product.php";

class c_product{

    public function showProductDetail(){

        $tong = $totalqty = 0;
        $cartList = [];
        if(isset($_SESSION['tong']))
        {
            $tong = $_SESSION['tong'];
        }
        if(isset($_SESSION['totalqty']))
        {
            $totalqty = $_SESSION['totalqty'];
        }
        if(isset($_SESSION['cartList']))
        {
            $cartList = $_SESSION['cartList'];
        }
        if(isset($_COOKIE['cart'])) {
            $json = $_COOKIE['cart'];
            $cart = json_decode($_COOKIE['cart'], true);
        }


        $id = $ten_san_pham = $don_gia = $mo_ta = $so_luong = $hinh_san_pham = $luot_xem = $loai = "";
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_product = new m_product();
            $product = $m_product->showProduct($id);
            var_dump($product);
            if($product){
                $ten_san_pham = $product->ten_san_pham;
                $don_gia = $product->don_gia;
                $mo_ta = $product->mo_ta;
                $so_luong = $product->so_luong;
                $hinh = $product->hinh_san_pham;
                $luot_xem = $product->luot_xem;
                $type = $m_product->showType($product->ID_loai_san_pham)->ten_loai_san_pham;


            }else{
                header("Location:shop.php");

        }
        }
        else{
            header("Location:shop.php");
        }

        $view = "views/products/product_details.php";
        require_once "templates/products/layouts.php";
    }
}