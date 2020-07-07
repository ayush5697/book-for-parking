<?php
if(isset($_POST['submit_email']) && $_POST['email'])
{
  include("connection.php");
  $query=("SELECT email,password FROM tbl_user WHERE email='$email'");
  if(mysql_num_rows($query)==1)
  {
    while($row=mysql_fetch_array($query))
    {
      $email=md5($row['email']);
      $password=md5($row['password']);
    }
    $link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$password."'>Click To Reset password</a>";
    require_once('phpmail/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "94aayushkumar@gmail.com";
    // GMAIL password
    $mail->Password = "ayush1234567";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='94ayushkumare@gmail.com';
    $mail->FromName='ayush verma';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
?>