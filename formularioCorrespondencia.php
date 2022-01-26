<?php
require_once('header.php');
require_once('area.php');
//require_once('remitente.php');
$obtenerArea= new area();
$datos=$obtenerArea->obtenerArea();



echo "formulario";
echo "<div>
<form method='post' action='insertarCorrespondencia.php'>
    <table align='center' border='1' width='50%'>
    <tr>
    <th>No de Volante</th>
    </tr>
    <tr>
    <th><input type='text' placeholder='No de volante'></th>
    </tr>
    <tr>
    <th>RESIGSTRO DE CORRESPONDENCIA</th>
    </tr>
    <tr>
        <table align='center' border='1' width='50%'>
        <tr>
            <td>Ingresa el número de Oficio</td>
            <td>Fecha de Oficio</td>
        </tr>
        <tr>
            <td><input type='text' placeholder='No de Oficio'></td>
            <td><input type='date'></td>
        </tr>
        <tr>
            <td>Seleccionar Remitente</td>
        </tr>
        <tr>
            <td>
                <select >
                <option>Selecciona una Opción</option>
                ";
                foreach($datos as $row){
                    $idArea=$row['idArea'];
                    $area=$row['area'];
                echo "<option value=".$idArea.">".$area."</option>
                </select>";
                }
            echo "</td>
        </tr>
        <tr>
        <td>Seleccionar Área</td>
        </tr>
        <tr>
            <td>
            
            <select >
            <option>Selecciona una Opción</option>
            ";
            foreach($datos as $row){
                $idArea=$row['idArea'];
                $area=$row['area'];
            echo "<option value=".$idArea.">".$area."</option>
            </select>";
            }
        echo "</td>
    </tr>
            </td>
        </tr>
        </table>
    </tr>

    </table>
</form>
</div>";


require_once('footer.php');


?>