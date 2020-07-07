<?php
include('connection.php');
$otp=$_POST['notp'];
$query="SELECT * FROM `tbl_user` WHERE otp = $otp";

$result=mysqli_query($con,$query);
$data=mysqli_fetch_row($result);

$id=$data[0];

//echo"<pre>";
//print_r($id);
//die;
	header("Location: newpassword.php?id=$id");

//header('Loc$ation:newpassword.php');

?>