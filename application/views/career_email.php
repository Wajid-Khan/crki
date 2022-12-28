<?php
error_reporting(-1);
ini_set('display_errors', 'On');


require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$path = 'uploads/'. $_FILES['attachment']['name'];
move_uploaded_file($_FILES['attachment']['tmp_name'], $path);

$name = $_POST['full_name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$msg = $_POST['msg'];

// $mail->Host = 'smtp.gmail.com';
$mail->Host = 'mail.crkinfraprojects.com';
$mail->port= 587;
$mail->SMTPAuth= true;
$mail->SMTPSecure= 'tls';
$mail->Username='contact@crkinfraprojects.com';
$mail->Password='welcome@123';
$mail->SMTPDebug = 1;
$mail->AddAttachment($path);
$mail->setFrom($email, $name);
$mail->addAddress('contact@crkinfraprojects.com');
// $mail->addAddress('wajid.developer1@gmail.com');
// $mail->AddCC('wajid@v3digitals.com');


$mail->isHTML(true);
$mail->Subject='Enquiry from Career Form';
$mail->Body='<h3>Name : '.$name.'<br>Email : '.$email.'<br>Phone Number : '.$number.'<br>Message : '.$msg.'</h3>';

if(!$mail->send())
{
    echo "Somethng went wrong. Please try again. Mailer error: " . $mail->ErrorInfo;
}
else
{
    echo '<script>alert("Your information has been sent successfully...")</script>';
    echo '<script>location = "http://crkinfraprojects.com/careers.php";</script>';
}



?>