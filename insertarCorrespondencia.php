<?php
require_once ('conexion.php');
class correspondencia{
    private $udc;
    private $noVolante;
    private $noOficio;
    private $consecutivo;
    private $fechaoficio;
    private $remitente;
    private $area;
    private $tipoDocumento;
    private $categoria;
    private $fecharecibido;
    private $horarecibido;
    private $asunto;
    private $generavolante;
    private $estatus;
    private $fdr;

    public function __construct()
    {
        $this->con= new conexion();
        $this->con= $this->con->conectar();
        session_start();
    }

    public function insertar(){
        $db="gestion_1";
        $timezone="America/Mexico_City";
        date_default_timezone_set($timezone);
        $datetime=date("Y-m-d H:i:s",time());
        
        
        $this->noVolante=452;
        $this->oficio="Oficio de Prueba";
        $this->consecutivo;
        $this->fechaoficio=date('d-m-Y');
        $this->remitente=14;
        $this->area=10;
        $this->tipoDocumento=2;
        $this->categoria=2;
        $this->fecharecibido=date('Y-m-d');
        $this->horarecibido=date('H:m:s');
        $this->asunto="prueba control";
        $this->estatus=3;
        $this->fdr=$datetime;
        $this->udc=$_SESSION['idusuario'];
        echo $this->fdr;
        //exit;
        $sql="INSERT INTO 
        $db.correspondencia (oficio, fechaOficio, idTipoDoc, idRemitente, idArea, fechaRecibio, horaRecibio, idCategoria, asunto, idEstatus, fdr, udc) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmn=$this->con->prepare($sql);
        $stmn->bindParam(1,$this->oficio);
        $stmn->bindParam(2,$this->fechaoficio);
        $stmn->bindParam(3,$this->tipoDocumento);
        $stmn->bindParam(4,$this->remitente);
        $stmn->bindParam(5,$this->area);
        $stmn->bindParam(6,$this->fecharecibido);
        $stmn->bindParam(7,$this->horarecibido);
        $stmn->bindParam(8,$this->categoria);
        $stmn->bindParam(9,$this->asunto);
        $stmn->bindParam(10,$this->estatus);
        $stmn->bindParam(11,$this->fdr);
        $stmn->bindParam(12,$this->udc);
        $res=$stmn->execute();
        if ($res){
            $resultado=$stmn->rowCount();
            echo $resultado;
        }              
        
    }
}
$corr=new correspondencia();
$corr->insertar();
?>