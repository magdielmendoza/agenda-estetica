<?php
include "../controlador/scripts.php";
    if(!empty($_POST["btnRegistrar"])){
        if (!empty($_POST["nombre"]) and !empty($_POST["apellido_paterno"]) and !empty($_POST["apellido_materno"]) and !empty($_POST["sexo"])) {
            
                $nombre = $_POST["nombre"];
                $apellido_paterno = $_POST["apellido_paterno"];
                $apellido_materno = $_POST["apellido_materno"];
                $sexo = $_POST["sexo"];

                $insertar = "INSERT INTO empleado SET nombre='$nombre' , apellido_paterno='$apellido_paterno' , apellido_materno='$apellido_materno' , id_sexo='$sexo' ";
                $resultado = mysqli_query($conexion, $insertar)
                    or die('<script>Swal.fire({
                        icon: "error",
                        title: "Error...",
                        text: "Error al registrar usuario"
                      });</script>');

                mysqli_close($conexion);
                echo '<script>Swal.fire({
                    icon: "success",
                    title: "Registro exitoso",
                    text: "Se registró el empleado"
                  });</script>';
                // header("location: frmEmpleado.php");
        }else{
            echo '<script>Swal.fire({
                icon: "error",
                title: "Error...",
                text: "Todos los campos son obligatorios"
              });</script>';
        }
    }
?>