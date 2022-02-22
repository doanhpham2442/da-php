<?php
include_once "../models/m_product.php";
if (isset($_POST['id'])) {
    $m = new m_product();
    $id = $_POST['id'];
    $sql = 'DELETE from san_pham where ID = ' . $id;
    $m->setQuery($sql);
    $delete =  $m->execute();
    if ($delete) {
        echo "Xóa thành công";
    } else {
        echo "Không xóa được";
    }







}