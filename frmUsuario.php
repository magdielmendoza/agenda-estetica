<?php
    session_start();
    include "controlador/scripts.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css/frmUsuario.css?=v1.2'>
    <title>Estética Unisex</title>
</head>
<body>
<header>
        <div class="logo">

                <img src="img/logo.png" class="imagen">

                <nav class="navegacion">
                    <ul class="menu">
                        <li class="lista"><a href="#">Principal</a></li>
                        <li class="lista"><a href="frmCita.php">Cita</a></li>
                        <li class="lista"><a href="#">Contacto</a></li>
                        <li class="lista"><a href="#">Ubicación</a></li>
                        <li class="lista"><a href="#">Historia</a></li>
                        <li class="lista2"><a href="#">Personal</a></li>
                    </ul>
                </nav>
                <button onclick="location.href='frmLogin.php'" class="inicio">Usuario</button>

        </div>
   </header>

    <section class="contenedor">
        <div class="division3">
            <div class="division3_1">Galeria</div>
        </div>

            <div class="division2">
                <div class="carrusel">
                    <div class="items">
                        <div class="items">
                            <img src="img/descarga1.jfif" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga2.jfif" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga3.jfif" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga4.jfif" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga5.jfif" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga2.jpg" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga6.jpg" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga7.jpg" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga8.jpg" alt="" />
                        </div>
                        <div class="items">
                            <img src="img/descarga9.jfif" alt="" />
                        </div>
                    </div> 
                </div>
                <script src="js/main.js"></script>
            </div>

            

    </section>

    <section>
            <div class="division4">
                <div class="division4_1">
                    Producto
                </div>
                <div class="division4_1_1">
                    <img src="img/pro1.jpg" alt="">
                    <img src="img/pro2.jfif" alt="">
                    <img src="img/pro3.jfif" alt="">
                </div>

                <div class="division4_2">
                    Promocion
                </div>
                <div class="division4_2_2">
                    
                </div>
            </div>
    </section>

    <script>Swal.fire({
            icon: "success",
            title: "Bienvenido",
            text: "<?php echo $_SESSION["usuario"];?>"
          });</script>
    <a href="controlador/controlador_cerrar_sesion.php">Salir</a>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</body>
</html>
