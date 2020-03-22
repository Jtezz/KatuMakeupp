<?php
    $destino="nixon.jaag@gmail.com";
    $nombre = $_POST['Nombre'];
    $correo = $_POST['Correo'];
    $asunto = $_POST['Asunto'];
    $telefono = $_POST['Telefono']; 
    $mensaje = $_POST['Mensaje'];

    $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nTeléfono: " . $telefono ."\nMensaje: " . $mensaje;

    if (mail($destino,"Contacto",$contenido)){
        header("Location:enviado.html");
    }else{  
        echo "No se puedo enviar mensaje...:c";
    }
    
?>