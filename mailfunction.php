<?php
function sendotp($email,$otp){
//echo $email;
//echo $otp;
//die;

	require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';
   require ('C:\xampp\phpMyadmin\vendor\autoload.php');

//echo 'email: '.$email; exit;   

$message_body="one time password php authentication is:<br/><br/>" .$otp;
$mail=new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username = 'talk2ayush672@gmail.com';
$mail->Password = "ayush12345";
$mail->SMPTPSecure='tls';
$mail->Port=587;
$mail->setFrom('talk2ayush672@gmail.com','ayush');
$mail->addReplyTo($email);
$mail->addAddress($email);
$mail->isHTML();
$mail->Subject="OTP";
$mail->Body=$message_body;


$result=$mail->Send();
if(!$result){
echo "mailer error:".$mail->ErrorInfo;
}
else{
	return $result;
	header('Location:otp.php');
}





}




?>