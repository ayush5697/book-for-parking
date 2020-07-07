<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
$id= $_GET['id'];


$query= "SELECT `id`,`event_title`,`event_date`,`event_image`,`event_date`,`event_detail` FROM `event`  WHERE id='".$id."'";
//echo $query;die;

$results = mysqli_query($con,$query);
while($row = $results->fetch_assoc()) {

 $event_title=$row['event_title'];
  $event_date=$row['event_date'];
 $event_image=$row['event_image'];
$event_detail=$row['event_detail'];
 
}


?>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style='background-color:#D6EAF8'>
<form method="POST" action="update_event.php" enctype="multipart/form-data">
<br><center><h1><b>Update Event</b></h1></center>
<br><p><h1>  Welcome  Admine</h1></p>
<form>

	<table class="table" >
		<div>
<tr>
	<td>
<h2><b>Title</b></h2>
 <input type="text" name="title" value="<?php echo $event_title;?>"></th>
</td>
</tr>
<tr>
	<td>
<h2><b>Event Date</b></h2>
 <input type="date" name="date" value="<?php echo $event_date;?>"></th>
</td>
</tr>
<tr>
	<td>
    <h2><b> Update Image : </b></h2> <input type="file" name="image">
    </td>
</tr>

 <tr>
	<td>
	<h2><b>Detail</b></h2>	
 
<textarea name="detail"><?php echo $event_detail;?></textarea>
 </td>
</tr>




<center><td><b><input name="submit" type="submit" value="update" class="button3"></b></td></center><td></tr	>
</table>

<input type="hidden" name="id" value="<?php echo $id;?>">
</form>
</body>
</html>
