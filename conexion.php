<?php
class conexion{
public $dns;
public $user;
public $password;
public $conex;
  
    public function __construct()
    {
       $this->dns="mysql:host=localhost;database=gestion_1;charset=utf8";
        $this->user='root';
        $this->password='root';
            try {
        $this->conex = new PDO($this->dns, $this->user, $this->password);
        $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Mensaje de conexión correcta
        //echo "Conexión Exitosa<br>";
          } catch (Exception $e) {
        $this->conex = "Ocurrió un error con la base de datos: "; echo "Error<br>" . $e->getMessage();
        }
     }
    public function conectar(){
        return $this->conex;
    }

}
?>