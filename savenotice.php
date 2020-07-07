<?php
include 'connection.php';
$title = $_POST['title'];
$detail= $_POST['detail'];


$query= "INSERT INTO `notice`(`notice_title`,`notice_detail`) VALUES ('$title','$detail')";
$sql=mysqli_query($con,$query);
header('Location:noticelist.php?msg=Saved, successfully.');


?>