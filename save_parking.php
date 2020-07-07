<?php
include 'connection.php';

session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
$city =  $_POST['city'];
$area  =  $_POST['area'];
$capacity =  $_POST['capacity'];


$query= "INSERT INTO `parking`(`city`,`area`,`capacity`) VALUES ('$city','$area','$capacity')";



$sql=mysqli_query($con,$query);
header('Location:parking.php?msg=Saved, successfully.');


?>