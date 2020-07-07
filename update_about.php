<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
//print_r($_POST);
$id = $_POST['id'];
$about = $_POST['about'];




$query="update `about` SET `about` = '".$about."' where id = '".$id."'";
//echo "$query";die;

$results = mysqli_query($con,$query);

header('location:about.php?msg=about updated, successfully.');

?>