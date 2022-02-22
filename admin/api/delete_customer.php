<?php
include_once "../models/m_customer.php";
if (isset($_POST['id'])) {
    $m = new m_customer();
    $id = $_POST['id'];
    $sql = 'DELETE from khach_hang where ID = ' . $id;
    $m->setQuery($sql);
    $delete =  $m->execute();
    if ($delete) {
        echo "Xóa thành công";
    } else {
        echo "Không xóa được";
    }







}