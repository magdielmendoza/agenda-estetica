<?php
include "controlador/scripts.php";
session_start();
    if(!empty($_POST["btnEntrar"])){
      if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = $conexion->query("SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña = '$password' ");
        if ($datos = $sql->fetch_object()) {
          $_SESSION["id"]=$datos->id_usuario;
          $_SESSION["usuario"]=$datos->usuario;
          $_SESSION["contraseña"]=$datos->contraseña;
          header("location: frmUsuario.php");
        } else {
          echo '<script>Swal.fire({
            icon: "error",
            title: "Error...",
            text: "Usuario y/o contraseña incorrectos"
          });</script>';
        }
      }else{
        echo '<script>Swal.fire({
          icon: "error",
          title: "Error...",
          text: "Campos vacios"
        });</script>';
      }
    }
?> 
