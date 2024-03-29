<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $secondname = $_POST['secondname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'autofocus9990@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = '01147784131'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('mohammedaly2222002@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('autofocus9990@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>First Name : $firstname <br>Second Name : $secondname <br>Email: $email <br>Phone: $phone <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent Successfully! We Will Contact You Soon.</span>
              </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
