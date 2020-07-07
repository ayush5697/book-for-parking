<?php 
session_start();
include('connection.php');
include('mailfunction.php');
//date_default_timezone_set("Asia/Delhi");
//print_r($_POST);
//$success="";
//$error_message="";
$email=$_POST['useremail'];

$query="SELECT * FROM `tbl_user` WHERE `email`='".$email."'";
$result=mysqli_query($con,$query);

$rowcount=mysqli_fetch_row($result);


//variable id
$id=$rowcount[0];
// echo var_dump(!empty($rowcount));
 //die;






if(!empty($rowcount)){//echo 'in if'; 
 
$_SESSION["email"] = $email;

	$id=$rowcount[0];
	// generate OTP
	$otp = rand(100000,999999);
	 $mail_status = sendotp($email,$otp);


	 
	 if ($mail_status==1){
	
	$query = "UPDATE `tbl_user` SET  `otp`='".$otp."' where `id`='".$id."' ";

    $result = mysqli_query($con,$query);

     
	if(!empty($result)){
		echo'otp sent';
	
header('Location:otp.php');
	
	}


else{ 
	echo'email does not exits';
}
// 
}

}


		// Send OTP
		
		
		// $mail_status = sendOTP($_POST["email"],$otp);
		
		// if($mail_status == 1) {
		// 	$result = mysqli_query($conn,"INSERT INTO login (otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
		// 	$current_id = mysqli_insert_id($conn);
		// 	if(!empty($current_id)) {
		// 		$success=1;
		// 	}
		?>