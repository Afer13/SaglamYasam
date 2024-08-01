<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
require_once 'baglan.php';
$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];//seher
  $email = $_POST['email'];//ad
  $message = $_POST['message'];//telefon
  
  if (empty($name)){
	  
	  $alert = '<div class="alert-error">
                <span>Şəhər yazın</span>
              </div>';
	  
  }else if (empty($email)){
	  
	  $alert = '<div class="alert-error">
                <span>Adınızı qeyd edin</span>
              </div>';
	  
  }else if (empty($message)){
	  
	  $alert = '<div class="alert-error">
                <span>Nömrə qeyd edin</span>
              </div>';
	  
  }else{

  try{
    $sifarisEl=$db->prepare("INSERT INTO sifarisler(sifaris_ad,sifaris_seher,sifaris_telefon) VALUES(:sifaris_ad,:sifaris_seher,:sifaris_telefon)");
	$sifarisEl->execute(array(
		'sifaris_ad'=>$email,
		'sifaris_seher'=>$name,
		'sifaris_telefon'=>$message,
	));
    
    
    
    $mail->isSMTP();
    $mail->Host = 'mail.saglamyasam.info.az';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@saglamyasam.info.az'; 
    $mail->Password = 'salamaleykum'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    $mail->setFrom('info@saglamyasam.info.az'); 
    $mail->addAddress('qlukozamin2022@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Sifaris (Azerbaijan)';
    $mail->Body = "<h3>Ölkə : $name <br>Ad: $email <br>Nömrə : $message</h3>";

    $mail->send();
    
    
    
	
    
    
    
    $alert = '<div class="alert-success">
                 <span>Mesaj Göndərildi! Bizimlə əlaqə saxladığınız üçün təşəkkür edirik.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
  }
}
?>
