<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https">
    <link rel='stylesheet' type='text/css' media='screen' href='css/frmLogin.css?v=1.1'>
    <title>Admin</title>
</head>
<body>
<header>
        <div class="logo">
                <img src="img/logo.png" class="imagen">

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
    <div class="container">
    <h2 align="center">Inicio de sesión</h2>  
    <?php 
        include "modelo/conexion.php";
        include "controlador/clsLoginAdmin.php";
    ?>   
    <br/>
    <section class="contenedor">
        <form action="" method="POST" name="entrar">
            <br/>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th colspan="7" class="th1">Usuario</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th colspan="7" class="th2"><input type="text" name="usuario"></th>
                </tr>
                <tr>
                    <th><br/></th>
                </tr>
                <tr>
                    <th colspan="7" class="th1">Password</th>
                </tr>
                <tr>
                    <th colspan="7" class="th2"><input type="password" name="password"></th>
                </tr>
                <tr>
                    <th><br/></th>
                </tr>
                <tr>
                    <th colspan="7" class="th2"><input type="submit" value="Inicio" name="btnEntrar" class="btnEntrar"></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </table>
        </form>    
    </section>
</div>
</body>
</html>
