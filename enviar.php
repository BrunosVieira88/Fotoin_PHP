<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_POST['nome']) {
  //Load Composer's autoloader
require 'vendor/autoload.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$body="Alguem chamado ". $nome." do ".$email." entrou em contato! <br> E deixou a mensagem ".$mensagem;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'moacir.maia2018@gmail.com';                     //SMTP username
    $mail->Password   = 'ljxqfkgsuobbxugh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('moacir.maia2018@gmail.com', 'Fotoin');
    $mail->addAddress('moacir.maia2018@gmail.com',$nome);     //Add a recipient*/
   /* $mail->addAddress($email,$nome);     //Add a recipient*/
    $mail->addReplyTo('brunosvtwo@gmail.com', 'Information');
   

    //Attachments
   /* $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contato inicial';
    $mail->Body    = $body;
    $mail->AltBody = 'Contato da Grafica Fotoin para entrar em contato com você';

    if($email){

        envioParaCliente($email,$nome);
    }

    $mail->send();
    echo 'Sucesso E-mail Enviado';
} catch (Exception $e) {
    echo "Mensage não pode ser enviada Error: {$mail->ErrorInfo}";
}
  # code...
}


function envioParaCliente($email,$nome){


  $mail = new PHPMailer(true);
  $mensagemCliente="Logo entraremos em contato para atender sua demanda";
  try {
      //Server settings
        //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'moacir.maia2018@gmail.com';                     //SMTP username
      $mail->Password   = 'ljxqfkgsuobbxugh';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('moacir.maia2018@gmail.com', 'Fotoin');
      $mail->addAddress($email,$nome);     //Add a recipient*/
      /*$mail->addReplyTo('brunosvtwo@gmail.com', 'Information');*/
    

      //Attachments
    /* $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Entraremos em contato em Breve';
      $mail->Body    = $mensagemCliente;
      $mail->AltBody = 'Entraremos em contato o mais breve possivel';


      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
    # code...

}