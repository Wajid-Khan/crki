<?php
error_reporting(-1);
ini_set('display_errors', 'On');


require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$name = $_POST['full_name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$msg = $_POST['message'];

// $mail->Host = 'smtp.gmail.com';
$mail->Host = 'mail.crkinfraprojects.com';
$mail->port= 587;
$mail->SMTPAuth= true;
$mail->SMTPSecure= 'tls';
$mail->Username='contact@crkinfraprojects.com';
$mail->Password='welcome@123';
$mail->SMTPDebug = 1;
$mail->setFrom($email, $name);
$mail->addAddress('contact@crkinfraprojects.com');
// $mail->addAddress('wajid.developer1@gmail.com');
$mail->AddCC('wajid.developer1@gmail.com');


$mail->isHTML(true);
$mail->Subject='Enquiry from Popup Form';
$mail->Body='<h3>Name : '.$name.'<br>Email : '.$email.'<br>Phone Number : '.$number.'<br>Message : '.$msg.'</h3>';

if(!$mail->send())
{
    echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
}
else
{
    echo "Enquiry has been sent successfully...";
}



?>
<!-- -->