<?php
DEFINE("MAX_NUMBER",12);
require_once("database.php");

class m_product extends database
{

    public function showAllProducts($sql,$vt = -1, $limit = -1)
    {


        if ($vt >= 0 && $limit >= 0 ) {
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function showProduct($id)
    {
        $sql = "UPDATE san_pham set luot_xem = luot_xem+1 WHERE id = ".$id;
        $this->setQuery($sql);
        $this->execute();
        $sql = "SELECT * FROM san_pham WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function showType($id_loai)
    {
        $sql = "SELECT * FROM loai_san_pham WHERE ID = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_loai));
    }


//    public function showAllProducts()
//    {
//        $sql = "SELECT * FROM san_pham ";
//
//        $this->setQuery($sql);
//        return $this->loadAllRows();
//    }

    public function showAllTypes()
    {
        $sql = "SELECT * FROM loai_san_pham ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}
//
//
//}
//

