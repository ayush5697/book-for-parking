<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
//print_r($_POST);
$id = $_POST['id'];
$event_title = $_POST['title'];
$event_date = $_POST['date'];
$event_detail = $_POST['detail'];


$uploads_dir = 'images';
        $tmp_name = $_FILES["image"]["tmp_name"];
        $img_name = basename($_FILES["image"]["name"]);

        move_uploaded_file($tmp_name, "$uploads_dir/$img_name");


$query="update `event` SET `event_title` = '".$event_title."',`event_date` = '".$event_date."',`event_image` = '".$img_name."',`event_detail`='".$event_detail."' where id = '".$id."'";
//echo "$query";die;

$results = mysqli_query($con,$query);

header('location:event.php?msg=Notice updated, successfully.');

?>