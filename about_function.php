<?php
include'connection.php';

function getabout(){
	global $con;
	$query="SELECT * FROM `about` ORDER BY id DESC LIMIT 0,5";
	$results = mysqli_query($con,$query);
	return $results;

}

?>