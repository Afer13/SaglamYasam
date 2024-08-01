<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@certmetricis.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Milyarder200!'; // Gmail address Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('info@certmetricis.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('qlukozamin2022@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Sifariş (Azerbaijan)';
    $mail->Body = "<h3>Ölkə : $name <br>Ad: $email <br>Nömrə : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
