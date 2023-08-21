<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener y filtrar los valores enviados por el formulario
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $servicios = filter_input(INPUT_POST, 'servicios', FILTER_SANITIZE_STRING);
    $fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING);

    // Validar campos requeridos
    if (empty($nombre) || empty($correo) || empty($telefono) || empty($servicios) || empty($fecha) || empty($mensaje)) {
        echo "Por favor, complete todos los campos.";
    } else {
        // Aquí puedes continuar con el procesamiento del formulario, como enviar correos electrónicos o guardar en la base de datos.
        // Recuerda utilizar parámetros preparados al interactuar con la base de datos para evitar inyecciones SQL.

        // Por ejemplo, enviar el correo electrónico
        $destinatario = "josecanahuate05@gmail.com";
        $asunto = "Nueva cita reservada";
        $cuerpoMensaje = "Nombre: $nombre\n";
        $cuerpoMensaje .= "Correo: $correo\n";
        $cuerpoMensaje .= "Teléfono: $telefono\n";
        $cuerpoMensaje .= "Tipo de servicio: $servicios\n";
        $cuerpoMensaje .= "Fecha: $fecha\n";
        $cuerpoMensaje .= "Mensaje: $mensaje\n";

        // Envío del correo (esto es solo un ejemplo y no incluye medidas de seguridad adicionales)
        mail($destinatario, $asunto, $cuerpoMensaje);

        echo "Cita reservada con éxito. ¡Gracias!";
    }
}
?>
