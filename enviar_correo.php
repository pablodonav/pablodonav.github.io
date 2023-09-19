<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $to = 'pdonate@unizar.es';
    $subject = 'Mensaje de contacto de ' . $nombre;
    $body = "Nombre: $nombre\nCorreo electrónico: $email\n\nMensaje:\n$mensaje";

    // Enviar correo
    if (mail($to, $subject, $body)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar el correo.";
    }
}
?>
