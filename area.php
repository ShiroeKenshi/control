<?php
require_once ('conexion.php');

class area{
public $db;
public $con;

    public function obtenerArea(){
        $this->con = new conexion();
        $con = $this->con->conectar();
        $this->db='gestion_1';
        $sql="Select * from $this->db.cat_areas";
        //echo $sql."<br>";
        $stmn=$con->prepare($sql);
        $stmn->setFetchMode(PDO::FETCH_ASSOC);
        $stmn->execute();
        $datos= array();
        $i=0;
        while($reg =$stmn->fetch() ){
            $datos[$i]['idArea']=$reg['idArea'];
            $datos[$i]['area']=$reg['area'];
            //echo $reg['idArea']."-".$reg['area']."<br>";
        }
        return $datos;
    }
}
?>