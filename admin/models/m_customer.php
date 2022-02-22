<?php
require_once ("database.php");
class m_customer extends database{
    public function insert($ten_tieu_de,$hinh_anh,$trang_thai){
        $sql = "INSERT INTO  khach_hang(ten_tieu_de,hinh,trang_thai) value (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de,$hinh_anh,$trang_thai));


    }
    public function selectAll($id = ""){
        $sql = "Select * from khach_hang";
        if(!empty($id))
        {
            $sql .= " WHERE ID_nguoi_dung = ".$id;
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectOne($id){

        $sql = "Select * from khach_hang where ID_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function update($ten_tieu_de,$hinh_anh,$trang_thai,$id)
    {
        var_dump($ten_tieu_de,$hinh_anh,$trang_thai,$id); ;
        $sql = "UPDATE khach_hang set ten_tieu_de = ? , hinh = ?, trang_thai = ? where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de, $hinh_anh, $trang_thai,$id));

    }
    public function delete(){

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = 'delete from khach_hang where ma_tieu_de = ' . $id;
            $this->setQuery($sql);
            return $this->execute();

        }
    }
}
