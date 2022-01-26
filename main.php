<?php require_once('header.php');
require_once("js/json.js");
session_start();
$nombre=$_SESSION['nombre'];
$tipo=$_SESSION['permiso'];
echo "
<div name='lateral'>
<table border='1' width='15%'>
    <tr>
        <td><img src='images/reporte_logo.png'></td>
    </tr>
    <tr>
        <td>".$nombre.$tipo."</td>
    </tr>";
    if($tipo==1){
    echo "<tr>
        <td>Administración</td>
    </tr>";}
    echo"<tr>
        <td><a href='formularioCorrespondencia.php'>Correspondencia</a></td>
    </tr>
    <tr>
        <td>Volantes</td>
    </tr> 
    <tr>
    <td><a href='logout.php'><input type='button' value='Salir del Sistema' name='salir'></td></a>
</tr>
</table>
</div>
<div class='main'>s
</div>";
require_once('footer.php');
?>