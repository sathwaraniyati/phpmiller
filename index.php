<?php 
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "tls";

$mail->Port = "587";

$mail->Username = "sathwaraniyati57gmail.com";

$mail->Password = "9033107025";

$mail->Subject =  "Test Email Using PHP ";

$mail->setFrom("sathwaraniyati57gmail.com");

$mail->isHTML(true);

$mail->addAttachment('img/niyati.jpg');

$mail->Body = "<h1> This is h1 html heading</h1></br><p></p>This 
is html paragraph ....</p>";
 
$mail->addAddress("sathwaraniyati57gmail.com");

if($mail->Send()){
echo "Email Sent...!";
}else{
	echo "Error....!";
}

$mail->smtpClose();

































 ?>