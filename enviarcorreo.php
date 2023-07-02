<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  // Obtén otros datos del formulario

  // Configura el correo
  $destinatario = 'johaner84@hotmail.com'; // Cambia esto con tu dirección de correo
  $asunto = 'Nuevo formulario de contacto';
  $mensaje = "Nombre: $nombre\n";
  $mensaje .= "Correo electrónico: $correo\n";
  // Agrega otros campos al mensaje

  // Envía el correo
  $resultado = mail($destinatario, $asunto, $mensaje);

  if ($resultado) {
    echo 'El correo ha sido enviado correctamente.';
  } else {
    echo 'Ocurrió un error al enviar el correo.';
  }
}
?>
