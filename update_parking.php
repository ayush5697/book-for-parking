<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
//print_r($_POST);
$id = $_POST['id'];
$city = $_POST['city'];
$area = $_POST['area'];
$capacity= $_POST['capacity'];


$query="update `parking` SET `city` = '".$city."',`area` = '".$area."',`capacity` = '".$capacity."' where id = '".$id."'";
//echo "$query";die;

$results = mysqli_query($con,$query);

header('location:parking.php?msg= updated, successfully.');

?>