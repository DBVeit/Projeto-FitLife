<?php
date_default_timezone_set('Etc/UTC');
include_once("PHPMailer/PHPMailerAutoload.php");

$tituloEmail = "Recuperar senha no Sistema";

$message = 'mensagem';

$mail= new PHPMailer;
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 2;       // 0 = nao mostra o debug, 2 = mostra o debug
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'expcriativa3@gmail.com';
$mail->Password = '@Exp_criativa3';
$mail->SetFrom('expcriativa3@gmail.com', 'Fit Life Inc.');
$mail->addAddress('expcriativa3@gmail.com','Nao-responda-FitLife');
$mail->Subject = $tituloEmail;
$mail->msgHTML($message);

$mail->send();

?>