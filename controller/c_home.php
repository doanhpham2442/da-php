<?php
session_start();
include "models/m_product.php";
class c_home{
    public function index(){

        $products = "";
     $m_product  = new m_product();
    $products = $m_product->showAllProducts();
    $types  = $m_product->showAllTypes();
    $view = "views/home/v_home.php";
    require_once "templates/layouts.php";
    }
    public function index2(){
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
//      var_dump($_SESSION);




        $max_page = 1;
        $search = "";
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        else{
            $page  = 1;
        }
        $m_product  = new m_product();
        $types = $m_product->showAllTypes();

        $start = ($page-1)*MAX_NUMBER;
        $sql  = "SELECT * FROM san_pham ";
        if(isset($_GET['search']) && $_GET['search'] != "" ) {
                $search = $_GET['search'];
             $sql .= " WHERE ten_san_pham like '%" . $_GET['search'] . "%'";
            if (isset($_GET['type']) && $_GET['type'] != "") {
                $sql .= " AND id_loai_san_pham = " . $_GET['type'];
            }
        }
        else if(isset($_GET['type']) && $_GET['type'] != false )
        {
            $sql .= " WHERE id_loai_san_pham = " . $_GET['type'];
            if(isset($_GET['search']) &&  $_GET['search'] != "")
            {
                $sql .= " AND ten_san_pham like '%" . $_GET['search'] . "%'";
            }
        }
        if(isset($_GET['orderby']))
        {
            $sql .= " ORDER BY ".$_GET['orderby'];
        }

//        if(!isset($thongph))
//        {
//            $thongph =  "SELECT * FROM san_pham ";
//        }
//        if(isset($_GET['submit_search']))
//        {
//            $thongph = $sql;
//        }
        $allproducts = $m_product->showAllProducts($sql);
        $count = count($allproducts);
        $max_page =  $count / MAX_NUMBER;

        if($max_page == 0)
        {
            $max_page = 1;
        }
        $products = $m_product->showAllProducts($sql,$start,MAX_NUMBER);
        $max_page = ceil($max_page);
//        echo $thongph."</br>";
//        echo $sql;
//        var_dump($_GET); ;

        if($page <= 0 || $page > $max_page || !is_numeric($page))
        {
            header("Location:shop.php?page=1");
//            echo "Loi nhap trang";
            die();

        }

        echo $sql;
//        echo "<pre>";
//        var_dump($_SESSION['user']);
        echo "</pre>";

//        var_dump($_COOKIE);
        $view = "views/shop/v_shop.php";
        require_once "templates/shop/layouts.php";
    }

}
