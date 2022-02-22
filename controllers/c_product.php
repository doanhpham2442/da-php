<?php
include ("models/m_product.php");
    class c_product{
        public function __construct()
        {
        }
        public function index(){
            $m_product = new m_product();
            $product = $m_product->read_product(0,6);
            $view = ("views/product/v_product.php");
            include("templates/frontend/layout.php");
        }
    }
?>
