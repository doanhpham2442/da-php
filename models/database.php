<?php
include_once "config.php";
//include_once "database.php"
class database{
    protected $pdo = NULL;
    protected $sql = "";
    protected $sta = NULL;


    public function __construct()
    {
        try{
            $this->pdo = new PDO("mysql:host=". DB_HOST . ";dbname=".DB_NAME,DB_USER,DB_PWD);

        }catch (PDOException $ex){
            echo $ex->getMessage();
        }

    }
    public function setQuery($sql){
        $this->sql = $sql;
    }
    public function execute($options = array())
    {

        $this->sta = $this->pdo->prepare($this->sql);
        if ($options) {  //If have $options then system will be tranmission parameters
            for ($i = 0; $i < count($options); $i++) {
                $this->sta->bindParam($i + 1, $options[$i]);
            }
        }
        $this->sta->execute();
        return $this->sta;
    }
    public function loadAllRows($option = array()){
        if(!$result = $this->execute())
            return false;
        if(!$result = $this->execute($option))
            return false;
        return $result->fetchAll(PDO::FETCH_OBJ);

    }
    public function loadRow($option = []){
        if(!$result = $this->execute())
            return false;
        if(!$result = $this->execute($option))
            return false;
        return $result->fetch(PDO::FETCH_OBJ);

    }
    public function getLastItem(){
        return $this->pdo->lastInsertId();
    }
}














//
//require_once("config.php");
//
//class database
//{
//    protected $pdo = NULL;
//    protected $sql = '';
//    protected $sta = NULL;
//
//    public function __construct()
//    {
//        try {
//            $this->pdo = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME, DB_USER, DB_PWD);
//            $this->pdo->query('set names "utf8"');
//        } catch (PDOException $ex) {
//            die($ex->getMessage());
//        }
//    }
//
//    public function setQuery($sql)
//    {
//        $this->sql = $sql;
//    }
//
//
//    public function execute($options = array())
//    {
//
//        $this->sta = $this->pdo->prepare($this->sql);
//        if ($options) {  //If have $options then system will be tranmission parameters
//            for ($i = 0; $i < count($options); $i++) {
//                $this->sta->bindParam($i + 1, $options[$i]);
//            }
//        }
//        echo $this->sta->execute();
////        return $this->sta->fetchAll(PDO::FETCH_OBJ);
//    }
//
//
//}
