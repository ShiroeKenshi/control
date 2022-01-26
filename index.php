<?php require_once('header.php');?>
    <div id='divlo'>
    <table align='center' border='1' width='auto' >
    <tr>
     <td><img src='images/reporte_logo.png'></td>
    <tr>
     <td><h1>Control de Gestión</h1></td>
    </tr>
        <tr>
            <form method='post' action='valida_usuario.php'>
                    <td>
            
                    <label id='login'>Ingrese el usuario</label>
                    <input type='text' id='user' name='user' placeholder='Usuario'>
                    </td>
                |</tr>
                <tr>
                    <td>
                    <label id='login'>Ingrese la contraseña</label>
                    <input type='password' id='password' name='password' placeholder='Contraseña'>
                    </td>    
                </tr>
                <tr><td>
                <input type='submit' value='Iniciar Sesión'>
                </td>          
            </form>
        </tr>
    </table>
    </div>
<?php require_once('footer.php');?>
