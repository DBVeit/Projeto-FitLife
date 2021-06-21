,

 <?php

	date_default_timezone_set('Etc/UTC');
	require 'PHPMailerAutoload.php';

	$message = "Por favor clique no link abaixo para confirmar seu cadastro. <br><br> ";
    $message .= "http://localhost:8888/copelmais/php/confirmar-cadastro.php?code=$codigo";

	$mail= new PHPMailer;
	$mail->IsSMTP();        
	$mail->SMTPDebug = 0;       // 0 = não mostra o debug, 2 = mostra o debug (mensagens de erro)
	$mail->SMTPAuth = true;     // Autenticação ativada
	$mail->SMTPSecure = 'ssl';  
	$mail->Host = 'smtp.gmail.com'; 
	$mail->Port = 465; 
	$mail->Username = 'eduardo.nunes.lino'; // eu sempre usei gmail 
	$mail->Password = 'ppgia@2017';
	$mail->SetFrom('eduardo.nunes.lino@gmail.com', 'Copel+');
	$mail->addAddress('eduardo.nunes.lino@gmail.com','');
	$mail->Subject=("Confirmacao do cadastro no Copel+");
	$mail->msgHTML($message);
       
	$mail->send();

?>