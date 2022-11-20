<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Administrador</title> </head>
    <link rel="stylesheet" href="main.css?=v1.1">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/frmIndex.css?=v1.1'>
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

    <script src="main.js"></script>
  </body>
</html>
