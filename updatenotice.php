<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}

$id = $_POST['id'];
$notice_title=$_POST['title'];
$notice_detail=$_POST['detail'];



$query="update `notice` SET `notice_title` = '".$notice_title."',`notice_detail`='".$notice_detail."' where id = '".$id."'";

$results = mysqli_query($con,$query);

header('location:noticelist.php?msg=Notice updated, successfully.');

?>