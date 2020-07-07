<?php
include 'connection.php';

session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
$about =  $_POST['about'];



$query= "INSERT INTO `about`(`about`) VALUES ('$about')";



$sql=mysqli_query($con,$query);
header('Location:about.php?msg=Saved, successfully.');


?>