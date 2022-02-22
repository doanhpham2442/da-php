<?php
include_once "../models/m_banner.php";
if (isset($_POST['id'])) {
    $m = new m_banner();
    $id = $_POST['id'];
    $sql = 'DELETE from tieu_de where ID = ' . $id;
    $m->setQuery($sql);
    $delete =  $m->execute();
    if ($delete) {
        echo "Xóa thành công";
    } else {
        echo "Không xóa được";
    }







}