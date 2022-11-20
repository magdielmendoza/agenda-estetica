<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css/frmRegistro.css?=v1.2'>
    <title>Registro</title>
</head>
<body>
<header>
        <div class="logo">
                <img src="img/logo.png" class="imagen">

                <nav class="navegacion">
                    <ul class="menu">
                    <li class="lista"><a href="index.php">Inicio</a></li>
                        <li class="lista"><a href="#">Contacto</a></li>
                        <li class="lista"><a href="#">Ubicación</a></li>
                        <li class="lista"><a href="#">Historia</a></li>
                        <li class="lista2"><a href="#">Personal</a></li>
                    </ul>
                </nav>

                <button onclick="location.href='frmLogin.php'" class="inicio">Inicio</button>

        </div>
   </header>
    <div class="container">
    <h2 align="center">Registro de Usuario</h2>   
    <?php 
        include "modelo/conexion.php";
        include "controlador/clsRegistro.php";
    ?>  
<section class="contenedor">
<form action="" method="POST" name="registrar">
<table class="tbl">
<br/>
        <tr>
            <th colspan="7" class="th1"></th>
        </tr>
        <tr class="tr1">
            <th>Nombre: </th>
            <th><input type="text" name="nombre"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr1">
            <th>Apellido Paterno: </th>
            <th><input type="text" name="apellido_paterno"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr1">
            <th>Apellido Materno: </th>
            <th><input type="text" name="apellido_materno"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr1">
            <th>Fecha de Nacimiento: </th>
            <th><input type="date" name="fecha_nacimiento"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr1">
            <th>Número de Teléfono: </th>
            <th><input type="number" name="telefono" step="any"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr1">
            <th>Correo Electrónoco: </th>
            <th><input type="text" name="email"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr1">
            <th>Sexo: </th>
            <th>
            <input type="radio" name="sexo" value="M">Mujer
            <input type="radio" name="sexo" value="H">Hombre 
            </th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr2">
            <th>Usuario: </th>
            <th><input type="text" name="usuario"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr class="tr2">
            <th>Contraseña: </th>
            <th><input type="password" name="password"></th>
        </tr>
        <tr class="tr2">
            <th>Confirmar contraseña: </th>
            <th><input type="password" name="confirm"></th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr>
            <th colspan="7" class="th2"><input type="checkbox" name="aceptar"> Acepto los Términos y condiciones</th>
        </tr>
        <tr>
            <th><br/></th>
        </tr>
        <tr>
            <th colspan="7" class="th2"><input type="submit" value="Registrar" name="btnRegistrar"></th>
            <th colspan="7" class="th2"><a href="frmLogin.php">Regresar</a></th>
        </tr>
    </table>
</form>
</section>
</div>
</body>
</html>