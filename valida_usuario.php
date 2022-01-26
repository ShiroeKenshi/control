<?php 
require_once ('conexion.php');
class validaUsuario {
    
    public $usuario;
    public $contrasena;
    public $con;
    public $db;

    public function __construct()
    {
    $this->con= new conexion();
    $this->con= $this->con->conectar();
    }
    
    public function validar(){
        $this->db="gestion_1";
        $this->usuario=$_POST["user"];
        $this->contrasena=$_POST["password"];
        $sql="Select * from $this->db.usuarios_sistema where cuenta='$this->usuario' and clave='$this->contrasena'";
        //echo $sql;
        foreach($this->con->query($sql)as $row){
            $idusuario=$row['idUsuario'];
            $clave=$row['cuenta'];
            $cont=$row['clave'];
            $nombre=$row['nombreCompleto'];
            $permiso=$row['idTipo'];
        }
        //echo "<br>".$clave."<br>".$cont;
        if($this->usuario==$clave && $this->contrasena==$cont){
            session_start();
            $_SESSION['nombre']=$nombre;
            $_SESSION['permiso']=$permiso;
            $_SESSION['idusuario']=$idusuario;
            //echo $_SESSION['nombre'];
            header("Location:main.php");
            //echo $resultado;
            //echo "<br>". $this->usuario."</br>".$this->contrasena;
        }
        else{
            //echo "Verifique el Usuario y/o la contraseña";
            header("Location:index.php");
        }
    }
}
$validar= new validaUsuario();
$validar->validar();
?>