<?php
require_once ("database.php");
class m_user extends database{
    public function checkAvailableUser($username)
    {
        $sql = "SELECT * FROM nguoi_dung where ten_dang_nhap = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($username));

    }
    public function takeUserbyId($username ,$password){
        $sql = "SELECT * FROM nguoi_dung where ten_dang_nhap = ? AND mat_khau = ? AND active = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($username,md5($password),1));

    }
    public function registerUser($username ,$password,$email,$date_register){
        $sql = "INSERT INTO nguoi_dung (ID_loai_nguoi_dung,ten_dang_nhap,mat_khau,ngay_dang_ky,active) 
VALUES (?,?,?,?,?);";
        $this->setQuery($sql);
         $registerUser = $this->execute(array(2,$username,md5($password),$date_register,1));
        $id_nguoi_dung = $this->getLastItem();
        $sql = "INSERT INTO khach_hang (ID_nguoi_dung,email) VALUES (?,?) ";
        $this->setQuery($sql);
        $this->execute(array($id_nguoi_dung,$email));
         return $registerUser;
    }


}



