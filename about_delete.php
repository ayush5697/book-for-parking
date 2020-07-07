<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}

$sql = "DELETE FROM about WHERE id=".$_GET['id'];
if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

?>
<br><br>
<a href="about.php">Back To List</a>