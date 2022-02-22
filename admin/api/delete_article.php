<?php
include_once "../models/m_article.php";
if (isset($_POST['id'])) {
    $m = new m_article();
    $id = $_POST['id'];
    $sql = 'DELETE from bai_viet where ID = ' . $id;
    $m->setQuery($sql);
    $delete =  $m->execute();
    if ($delete) {
        echo "Xóa thành công";
    } else {
        echo "Không xóa được";
    }







}