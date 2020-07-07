<?php
session_start();
include('connection.php');

if(isset($_POST['psubmit'])){

$password = $_POST['password_code'];
$cpassword = $_POST['c_password'];

if($password == $cpassword){

$query="UPDATE  `tbl_user` SET `password`='".$password."' where  `email`='".$_SESSION["email"]."'";
$result=mysqli_query($con,$query);
	echo'successfull';
	header('Location:login.php?successfully updated');
}
else
{
	echo'incoorect';
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
        body{
       background-color:#D6EAF8;
    }
    </style>
<body>
	<form method="POST">
		<table>
	<h3>NEW PASSWORD </h3>
<tr>
	<td>
		<input type="password" name="password_code"  placeholder="enter new passsword"> </td></tr>
		
		<tr>
		<td><input type="password" name="c_password"  placeholder=" confirm passsword"> </td></tr>
		<td><input type="submit" name="psubmit" value="submit"> </td>
</tr>
</table>
</form>
</body>
</html>

