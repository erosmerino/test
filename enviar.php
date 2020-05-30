<?php
$introducir_nombre = $_POST['introducir_nombre'];
$introducir_email = $_POST['introducir_email'];
$introducir_asunto = $_POST['introducir_asunto'];
$introducir_mensaje = $_POST['introducir_mensaje'];

$destinatario = "erosm3a@gmail.com";
$asunto = "contacto sobre nuestra web";

$carta = "de: $introducir_nombre \n";
$carta .= "correo: $introducir_email \n";
$carta .= "asunto: $introducir_asunto \n";
$carta .= "mensaje: $introducir_mensaje";

mail($destinatario, $asunto, $carta);
?>
