<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css/frmRecuperacion.css?=v1.1'>
    <meta property="og:title" content="Alerts">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<header>
        <div class="logo">
                <img src="img/logo.png" class="imagen">

                <nav class="navegacion">
                    <ul class="menu">
                    <li class="lista"><a href="index.php">Inicio</a></li>
                        <li class="lista"><a href="#">Contacto</a></li>
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
    <h2 align="center">Recuperación</h2>  
    <?php 
        include "modelo/conexion.php";
        include "controlador/clsRecuperacion.php";
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
                    <th colspan="7" class="th1">Correo Electrónico: </th>
                </tr>
                <tr>
                    <th><br/></th>
                </tr>
                <tr>
                    <th colspan="7" class="th2"><input type="email" name="email"></th>
                </tr>
                <tr>
                    <th><br/></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th colspan="7" class="th2"><input type="submit" value="Enviar" name="btnEnviar"></th>
                    <th colspan="7" class="th2"><a href="frmLogin.php">Cancelar</a></th>
                </tr>
            </table>
        </form>    
    </section>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>