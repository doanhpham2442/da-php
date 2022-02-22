<?php
session_start();
include_once "models/m_product.php";
class c_checkout{

    public function showCheckOut(){
        var_dump($_POST);

        $view = "views/check_out/v_check_out.php";
        require_once "templates/check_out/layouts.php";
    }
}