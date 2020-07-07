<?php
include 'connection.php';

session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
$title =  $_POST['title'];
$date  =  $_POST['date'];
$detail=  $_POST['detail'];





        $uploads_dir = 'images';
        $tmp_name = $_FILES["image"]["tmp_name"];
        $img_name = basename($_FILES["image"]["name"]);

        move_uploaded_file($tmp_name, "$uploads_dir/$img_name");



$query= "INSERT INTO `event`(`event_title`,`event_date`,`event_image`,`event_detail`) VALUES ('$title','$date','$img_name','$detail')";

$sql=mysqli_query($con,$query);
header('Location:event.php?msg=Saved, successfully.');








?>