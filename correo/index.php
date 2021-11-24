<?php
use PHPMailer\PHPMailer\PHPMailer;
require "vendor/autoload.php";
$mail = new PHPMailer();
$mail->IsSMTP();
// cambiar a 0 para no ver mensajes de error
$mail->SMTPDebug  = 2;
$mail->SMTPAuth   = true;
$mail->SMTPSecure = "tls";
$mail->Host       = "smtp.gmail.com";
$mail->Port       = 587;
// introducir usuario de google
$mail->Username   = "javijd23@gmail.com";
// introducir clave
$mail->Password   = "dmbaloncesto10";
$mail->SetFrom('javijd23@gmail.com', 'Test');
// asunto
$mail->Subject    = "Prueba correo";
// cuerpo
$mail->MsgHTML("<h1>Prueba</h1> <img src='cid:foto'>");
// adjuntos
$mail->AddEmbeddedImage('img/jordan.jpg', 'foto');// destinatario

$address = "jve@ieslasfuentezuelas.com";
$mail->AddAddress($address, "Test");
// enviar
$resul = $mail->Send();
if(!$resul) {
  echo "Error" . $mail->ErrorInfo;
} else {
  echo "Enviado";
}