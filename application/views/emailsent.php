<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'easytravel.b27@gmail.com';          // SMTP username
$mail->Password = 'easy12345'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('', 'Hotel Portal');
$mail->addReplyTo('', 'Hotel Portal');
$mail->addAddress(''.$user_email.'');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Your Varification Link</h1>';
$bodyContent .= '<p><a href="http://localhost/easytravel/home/verification/s4343vhsvshsasdfghjklwertyuiopqwertyuiopqwertyuiopqwertyuio352264677/?email='.$user_email.'">Click Here</a></b></p>';

$mail->Subject = 'Confirm Your Email From Hotel Portal';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
