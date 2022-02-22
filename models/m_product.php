<?php
require_once "database.php";
class m_product extends database {
    public function read_product($vt = -1, $limit = -1) {
        $sql = "select * from san_pham";
        if($vt >= 0 && $limit > 0){
            $sql .= " limit $vt,$limit";
        }
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>