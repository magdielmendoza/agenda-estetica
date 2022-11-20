<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Empleado</title> </head>
    <link rel="stylesheet" href="main.css?=v1.1">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/frmEmpleado.css?=v1.2'>
  <body>
  <header>
        <div class="logos">
                <img src="../img/logo.png" class="imagen">

                <nav class="navegacion">
                    <ul class="menu">
                        <li class="lista"><a href="#">Contacto</a></li>
                        <li class="lista"><a href="#">Ubicación</a></li>
                        <li class="lista"><a href="#">Historia</a></li>
                        <li class="lista2"><a href="#">Personal</a></li>
                    </ul>
                </nav>

                <button onclick="location.href='frmLogin.php'" class="inicio">Inicio</button>

        </div>
   </header>
    <div id="sidebar">
      <div class="toggle-btn">
        <span>&#9776</span>
      </div>
      <ul>
        <li>
          <img src="img/icon.png" alt="Logo Fazt" class="logo">
        </li>
        <li>Usuario</li>
        <li>Agenda Personal</li>
        <li><a href="frmEmpleado.php">Empleados</a></li>
        <li>Citas</li>
        <li>Promociones</li>
        <li>Salir</li>
      </ul>
    </div>
    <div class="container">
    <h2 align="center">Registro de Empleado</h2>   
    <?php 
        include "../modelo/conexion.php";
        include "../controlador/clsEmpleado.php";
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
        <tr>
            <th><br/></th>
        </tr>
        <tr>
            <th colspan="7" class="th2"><input type="submit" value="Registrar" name="btnRegistrar"></th>
            <th colspan="7" class="th2"><a href="index.php">Regresar</a></th>
        </tr>
    </table>
</form>
</section>
</div>


    <script src="main.js"></script>
  </body>
</html>
