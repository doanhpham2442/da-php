<?php
require_once ("database.php");
class m_product extends database{
    public function insert($ten_tieu_de,$hinh_anh,$trang_thai){
        $sql = "INSERT INTO  san_pham(ten_tieu_de,hinh,trang_thai) value (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de,$hinh_anh,$trang_thai));
    }
    public function selectAll(){
        $sql = "Select * from san_pham ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectOne($id){

        $sql = "Select * from tieu_de where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function update($ten_tieu_de,$hinh_anh,$trang_thai,$id)
    {
        var_dump($ten_tieu_de,$hinh_anh,$trang_thai,$id); ;
        $sql = "UPDATE tieu_de set ten_tieu_de = ? , hinh = ?, trang_thai = ? where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de, $hinh_anh, $trang_thai,$id));

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