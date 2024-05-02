<?php 
include "../../config/database/conexao.php"; //Conexão

$query = "SELECT smtp_email_host, email_envio_fatura, senha_email_envio, nome_email_envio, assunto_email_envio, msg_body_email_envio FROM tbl_config_fatura WHERE id = 1";

$result = mysqli_query($conexao,$query); 
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
    $smtp_email_host = $row['smtp_email_host'];
    $email_envio_fatura = $row['email_envio_fatura'];
    $senha_email_envio = $row['senha_email_envio'];
    $nome_email_envio = $row['nome_email_envio'];
    $assunto_email_envio = $row['assunto_email_envio'];
    $msg_body_email_envio = nl2br($row['msg_body_email_envio']);
endwhile;

session_start();

$email_cliente = $_SESSION['emailCliente'];

$arquivo_fatura = $_SESSION['arquivo_fatura'];

$path = dirname(__FILE__);
$path .= '/../../includes/mailer/PHPMailerAutoload.php';
include_once($path);

// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
 // DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
 $mail->IsSMTP(); // Define que a mensagem será SMTP
 $mail->Host = $smtp_email_host; // Seu endereço de host SMTP
 $mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
 $mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
 $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
 $mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
 $mail->Username = $email_envio_fatura; // Conta de email existente e ativa em seu domínio
 $mail->Password = $senha_email_envio; // Senha da sua conta de email
 // DADOS DO REMETENTE
 $mail->Sender = $email_envio_fatura; // Conta de email existente e ativa em seu domínio
 $mail->From = $email_envio_fatura; // Sua conta de email que será remetente da mensagem
 $mail->FromName = $nome_email_envio; // Nome da conta de email
 // DADOS DO DESTINATÁRIO
 
 $mail->AddAddress($email_cliente); // Define qual conta de email receberá a mensagem
 //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
 //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
 //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 // Definição de HTML/codificação
 $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
 $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 // DEFINIÇÃO DA MENSAGEM
 $mail->Subject  = $assunto_email_envio; // Assunto da mensagem
 $mail->Body .= $msg_body_email_envio;
 $mail->addAttachment($arquivo_fatura);
// Texto da mensagem
 // ENVIO DO EMAIL


//$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;
 $enviado = $mail->Send();
 // Limpa os destinatários e os anexos
 $mail->ClearAllRecipients();
 // Exibe uma mensagem de resultado do envio (sucesso/erro)
 if ($enviado) {
   echo "sucesso";
 } else {
   echo "Não foi possível enviar o e-mail.";
   echo "Detalhes do erro: " . $mail->ErrorInfo;
 }
 ?>