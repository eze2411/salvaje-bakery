<?php
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["email"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}

$email = $_POST["email"];


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1660155.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "no-reply@c1660155.ferozo.com";  // Mi cuenta de correo
$smtpClave = "Rp1*FXk9eI";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "info@salvajebakery.com.ar";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $email;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Nueva suscripcion"; // Este es el titulo del email.
$mensajeHtml = nl2br($email);
$mail->Body = "El siguiente correo quiere suscribirse a las novedades: {$mensajeHtml} <br /><br />"; // Texto del email en formato HTML
$mail->AltBody = "El siguiente correo quiere suscribirse a las novedades:  {$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    header("Location:/unite-exito.php");
} else {
    echo "Ocurrió un error inesperado.";
}