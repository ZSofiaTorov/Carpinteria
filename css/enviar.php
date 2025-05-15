<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $para = "jonathanferrer0203@gmail.com";
    $asunto = "Nueva solicitud de cotización desde la web";
    $contenido = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nMensaje: $mensaje";
    $headers = "From: $email";

    mail($para, $asunto, $contenido, $headers);

    echo "Mensaje enviado con éxito";
} else {
    echo "Error en el envío";
}
?>
