<?php
require_once ("database.php");
class m_article extends database{
    public function insert($id_loai,$id_user,$tieu_de,$ndtt,$ndct,$ngay_gui,$han){
        $sql = "INSERT INTO bai_viet (
        ID_loai_bai_viet, ID_nguoi_dung,
        tieu_de, noi_dung_tom_tat, noi_dung_chi_tiet,ngay_gui_bai,ngay_het_han)
        VALUES (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        echo $sql;
        echo "$id_loai,$id_user,$tieu_de,$ndtt,$ndct,$han";
        echo $ngay_gui;
//        die();
        return $this->execute(array($id_loai,$id_user,$tieu_de,$ndtt,$ndct,$ngay_gui,$han));
    }
    public function selectAll(){
        $sql = "SELECT bv.*,nd.ten_dang_nhap,lbv.ten_loai_bai_viet FROM bai_viet bv LEFT JOIN nguoi_dung nd on
 bv.ID_nguoi_dung = nd.ID LEFT JOIN loai_bai_viet lbv on lbv.ID= bv.ID_loai_bai_viet";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectAllType(){
        $sql = "Select * from loai_bai_viet";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectOne($id){

        $sql = "Select * from bai_viet where ID = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function update($id_loai,$tieu_de,$ndtt,$ndct,$han,$id)
    {
        $sql = "UPDATE bai_viet set ID_loai_bai_viet = ? , tieu_de = ?,
 noi_dung_tom_tat = ? , noi_dung_chi_tiet = ?, ngay_het_han = ? where ID = ?";
        $this->setQuery($sql);
        echo $sql;
        return $this->execute(array($id_loai,$tieu_de,$ndtt,$ndct,$han,$id));

    }
    public function delete(){

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = 'delete from tieu_de where ma_tieu_de = ' . $id;
            $this->setQuery($sql);
            return $this->execute();

        }
    }
}