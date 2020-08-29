<?php
/**
 * @version 1.0
 */

$msg= '';

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["message"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}
$name= $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

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
$mail->FromName = $name;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Nuevo formulario de contacto"; // Este es el titulo del email.
$mensajeHtml = nl2br($message);
$mail->Body = "Hola mi nombre es {$name} <br /> Y esta es mi consulta: <br /> {$mensajeHtml} <br />"; // Texto del email en formato HTML
$mail->AltBody = "Hola mi nombre es {$name} \n\n Y esta es mi consulta: \n\n {$message} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    header("Location:/contacto-exito.php");
} else {
    $msg= '<div class="alert alert-danger span-md-12">Hubo un error, intente nuevamente a la brevedad</div>';
}

?>