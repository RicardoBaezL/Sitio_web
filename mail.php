<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

try{
$mail = new PHPMailer();
    //Definir que vamos a usar SMTP
$mail->IsSMTP();
    //Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
    // 0 = off (producción)
    // 1 = client messages
    // 2 = client and server messages
$mail->SMTPDebug  = 0;
    //Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host       = 'smtp.gmail.com';
    //El puerto será el 587 ya que usamos encriptación TLS
$mail->Port       = 587;
    //Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
    //Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth   = true;
    //Definimos la cuenta que vamos a usar. Dirección completa de la misma
$mail->Username   = "ricardo.baez@davinci.edu.ar";
    //Introducimos nuestra contraseña de gmail
$mail->Password   = '';
    //Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom('ricardo.baez@davinci.edu.ar', 'Ricardo');
    //Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
$mail->AddReplyTo('ricardo.baez@davinci.edu.ar','El de la réplica');
    //Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress('ricardo.baez@davinci.edu.ar', 'El Destinatario');
    //Definimos el tema del email
$mail->Subject = 'Esto es un correo de prueba';
    //Agregar  directamente una cadena de texto.
$mail->Body = 'Este es un mail de prueba sin HTML';
    //Enviamos el correo
    $mail->send();
    echo 'Mensaje Enviado';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>





