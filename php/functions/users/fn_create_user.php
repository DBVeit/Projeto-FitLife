<?php
include_once ("../database/conexao.php");
include_once ("../mail/PHPMailer/class.phpmailer.php");
include_once ("../mail/PHPMailer/PHPMailerAutoload.php");
include_once ("../admin/logger.php");

if (isset($_POST['bCadastrar'])) {
    $tNome = $mysqli->real_escape_string($_POST['tNome']);
    $tNewEmail = $mysqli->real_escape_string($_POST['tNewEmail']);
    $tNewSenha = $mysqli->real_escape_string(md5($_POST['tNewSenha']));

    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param("s",$tNewEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "Email já cadastrado";
        $logUserAlreadyExists = "Attempt to create new user with an already registered email: ".$tNewEmail;
        logger($logUserAlreadyExists);
    }else{
        $stmt = $mysqli->prepare("INSERT INTO usuarios (nome_completo, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $tNome, $tNewEmail, $tNewSenha);

        if ($stmt->execute()) {
            $logUserCreated = "New user has been registered as: ".$tNewEmail;
            logger($logUserCreated);
            $response = array("success" => true);
            echo json_encode($response);
            header("Location: ../../../index.php");
            $_SESSION['cadastrado'] = true;
            //Mailer
            $tituloEmail = "Confirmação de cadastro - Fit Life";
            $message = "<div align='left'>
                        <p>Bem-vindo ao Fit Life, ".$tNome."!</p>
                        <p>Por favor, confirme seu cadastro clicando no link abaixo:</p>
                    </div>";
            $message .= "http://localhost:63342/FitLife/php/links/confirm_user.php?email=".$tNewEmail;
            $mail= new PHPMailer;
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = 2;// 0 = nao mostra o debug, 2 = mostra o debug
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
            $logUserMailerSend = "Account confirmation email was sended to: ".$tNewEmail;
            logger($logUserMailerSend);
            $mysqli->close();
        }else{
            header("Location: ../../../error/error500.php");
        }
    }
}
?>
