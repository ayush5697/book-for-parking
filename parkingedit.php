<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
$id= $_GET['id'];


$query= "SELECT `id`,`city`,`area`,`capacity` FROM `parking`  WHERE id='".$id."'";
//echo $query;die;

$results = mysqli_query($con,$query);
while($row = $results->fetch_assoc()) {

 $city=$row['city'];
  $area=$row['area'];
 $capacity=$row['capacity'];

}


?>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style='background-color:#D6EAF8'>
<form method="POST" action="update_parking.php" enctype="multipart/form-data">

<p><h1>  Welcome  Admine</h1></p>
<form>

	<table class="table" >
		<div>
<tr>
	<td>
<h2><b>City</b></h2>
 <input type="text" name="city" value="<?php echo $city;?>"></th>
</td>
</tr>
<tr>
	<td>
<h2><b>Area/Location</b></h2>
 <input type="text" name="area" value="<?php echo $area;?>"></th>
</td>
</tr>
<tr>
	<td>
<h2><b>Capacity</b></h2>
 <input type="text" name="capacity" value="<?php echo $capacity;?>"></th>
</td>
</tr>

 



<center><td><b><input name="submit" type="submit" value="update" class="button3"></b></td></center><td></tr	>
</table>

<input type="hidden" name="id" value="<?php echo $id;?>">
</form>
</body>
</html>
