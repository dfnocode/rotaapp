<?php

$path = dirname(__FILE__);
$path .= '/../../includes/mailer/PHPMailerAutoload.php';
include_once($path);

// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
 // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
 $mail->IsSMTP(); // Define que a mensagem será SMTP
 $mail->Host = "smtp.jcferias.com.br"; // Seu endereço de host SMTP
 $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
 $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
 $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 $mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
 $mail->Username = 'send@jcferias.com.br'; // Conta de email existente e ativa em seu domínio
 $mail->Password = 'jc@159753'; // Senha da sua conta de email
 // DADOS DO REMETENTE
 $mail->Sender = "send@jcferias.com.br"; // Conta de email existente e ativa em seu domínio
 $mail->From = "send@jcferias.com.br"; // Sua conta de email que será remetente da mensagem
 $mail->FromName = "No replly"; // Nome da conta de email
 // DADOS DO DESTINATÁRIO
 $mail->AddAddress($email, 'User'); // Define qual conta de email receberá a mensagem
 //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
 //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
 //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 // Definição de HTML/codificação
 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 // DEFINIÇÃO DA MENSAGEM
 $mail->Subject  = "Recuperação de Senha"; // Assunto da mensagem
 $mail->Body .= "TESTE";
// Texto da mensagem
 // ENVIO DO EMAIL
 $enviado = $mail->Send();
 // Limpa os destinatários e os anexos
 $mail->ClearAllRecipients();
 // Exibe uma mensagem de resultado do envio (sucesso/erro)
 if ($enviado) {
   echo "E-mail enviado com sucesso!";
 } else {
   echo "Não foi possível enviar o e-mail.";
   echo "Detalhes do erro: " . $mail->ErrorInfo;
 }