
<?php
error_reporting(-1);
ini_set('display_errors', 'On');


require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$name = $_POST['full_name'];
$email = $_POST['email'];
$user_subject = $_POST['user_subject'];
$msg = $_POST['message'];
// $sub = $_POST['sub'];

// $mail->Host = 'smtp.gmail.com';
$mail->Host = 'mail.esrprojects.com';
$mail->port= 587;
$mail->SMTPAuth= true;
$mail->SMTPSecure= 'tls';
$mail->Username='contact@esrprojects.com';
$mail->Password='welcome@123';
$mail->SMTPDebug = 1;
$mail->setFrom($email, $name);
$mail->addAddress('contact@esrprojects.com');
$mail->addCC('wajid.developer1@gmail.com');


$mail->isHTML(true);
$mail->Subject=$user_subject;
$mail->Body='<h3>Name : '.$name.'<br>Email : '.$email.'<br>Subject : '.$user_subject.'<br>Message : '.$msg.'</h3>';

if(!$mail->send())
{
    echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
}
else
{
    echo "Enquiry has been sent successfully...";
}



?>
