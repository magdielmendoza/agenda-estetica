<?php
include "controlador/scripts.php";
    if(!empty($_POST["btnRegistrar"])){
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido_paterno"]) and !empty($_POST["apellido_materno"]) and !empty($_POST["telefono"]) and !empty($_POST["email"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["sexo"]) and !empty($_POST["usuario"]) and !empty($_POST["password"]) and !empty($_POST["confirm"]) and !empty($_POST["aceptar"])) {
            if($_POST["password"] == $_POST["confirm"]){
                $nombre = $_POST["nombre"];
                $apellido_paterno = $_POST["apellido_paterno"];
                $apellido_materno = $_POST["apellido_materno"];
                $email = $_POST["email"];
                $telefono = $_POST["telefono"];
                $fecha_nacimiento = $_POST["fecha_nacimiento"];
                $sexo = $_POST["sexo"];
                $usuario = $_POST["usuario"];
                $password = $_POST["password"];

                $insertar = "INSERT INTO cliente SET nombre='$nombre' , apellido_paterno='$apellido_paterno' , apellido_materno='$apellido_materno' , email='$email' , telefono='$telefono' , fecha_nacimiento='$fecha_nacimiento' , id_sexo='$sexo' ";
                $resultado = mysqli_query($conexion, $insertar)
                    or die('<span class="popupContent" id="popupItem">Error al registrar usuario</span>');

                $id_cliente = mysqli_insert_id($conexion);

                $insertar = "INSERT INTO usuario SET usuario='$usuario' , contraseña='$password' , id_cliente='$id_cliente'";
                $resultado = mysqli_query($conexion, $insertar)
                    or die('<span class="popupContent" id="popupItem">Error al registrar usuario</span>');

                mysqli_close($conexion);
                echo '<script>Swal.fire({
                    icon: "success",
                    title: "Registro exitoso",
                    text: "¡Bienvenido usuario!"
                  });</script>';
                header("location: frmLogin.php");

            }else{
                echo '<script>Swal.fire({
                    icon: "error",
                    title: "Error...",
                    text: "Verifique su contraseña"
                  });</script>';
            }
        }else{
            echo '<script>Swal.fire({
                icon: "error",
                title: "Error...",
                text: "Todos los campos son obligatorios"
              });</script>';
        }
    }
?>