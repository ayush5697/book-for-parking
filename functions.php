<?php

include 'connection.php';

function getNotice(){
	global $con;
	$query="SELECT *FROM `notice` ORDER BY id DESC LIMIT 0,5 ";
	$results = mysqli_query($con,$query);
	return $results;
}

function getevent(){
	global $con;
	$query="SELECT *FROM `event` ORDER BY id DESC LIMIT 0,5 ";
	$results = mysqli_query($con,$query);
	return $results;
}
function getparking(){
	global $con;
	$query="SELECT *FROM `parking` GROUP BY city ORDER BY id DESC LIMIT 0,10";
	$results = mysqli_query($con,$query);
	return $results;
} 
function getUserDetail($mobile_no){
	global $con;
	$query="SELECT * FROM `tbl_user` where mobile = '$mobile_no'";
	$results=mysqli_query($con,$query);
	return $results;

}
function getParkingDetail($parking_id){
	global $con;
	$query="SELECT * FROM `parking` where id = $parking_id";
	$results=mysqli_query($con,$query);
	return $results; 
}


function gettotalbooking($id){
	global $con;
	$query="SELECT * FROM `reserve_parking` where parking_id=$id";
	$results=mysqli_query($con,$query);
	$rowcount=mysqli_num_rows($results);
	return $rowcount;
	# code...
}

function gettotalavailability($id){
	global $con;
	$availability = 0;
$query="SELECT * FROM `parking_slot` WHERE  parking_id=$id AND `date`='".date('Y-m-d')."'";
//echo $query;die;
if ($results=mysqli_query($con,$query))
  {
 $rowcount=mysqli_num_rows($results);
if ($rowcount >0)
 {
  # code...

while ($row=$results->fetch_assoc()) {
$availability=$row['availability'];
  # code...
}
}
}
return $availability;
}






?>