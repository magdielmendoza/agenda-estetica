<?php
if(!empty($_POST["btnEnviar"])){
    if (!empty($_POST["email"])){
        $email = $_POST["email"];
        // Varios destinatarios
        $para  = $email . ', '; // atención a la coma

        // título
        $título = 'Restablecer contraseña Estética Thomas & Joel';

        // mensaje
        $mensaje = '
        <html>
        <head>
        <title>Restablecer</title>
        </head>
        <body>
        <h1>Estética Thomas & Joel</h1>
        <div style="text-align:center; background-color:#ccc">
            <p>Restablecer</p>
            <h3><a hrfe="http://localhost/frmRestablecer.php">Restablecer Contraseña</a></h3>
            <p><small>Si usted no envió este correo, favor de omitir</small></p>
        </div>
        </body>
        </html>
        ';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= 'From: "Papercut SMTP" <Papercut@papercut.com>' . "\r\n";
        /*
        // Cabeceras adicionales
        $cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        $cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
        $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
        $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
        */
        // Enviarlo
        $enviado=false;
        if(mail($para, $título, $mensaje, $cabeceras)){
            $enviado=true;
            ?>
          <div class="alert alert-danger" role="alert">Revise su correo</div>
          <?php
        }else{
            ?>
          <div class="alert alert-danger" role="alert">Error al envíar el correo</div>
          <?php
        }
        
    }
}
?>