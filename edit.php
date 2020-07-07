<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
$id= $_GET['id'];


$query= "SELECT `id`,`notice_title`,`notice_detail` FROM `notice`  WHERE id='".$id."'";
//echo $query;die;

$results = mysqli_query($con,$query);
while($row = $results->fetch_assoc()) {

 $notice_title=$row['notice_title'];

$notice_detail=$row['notice_detail'];
 
}


?>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style='background-color:#D6EAF8'>
<form method="POST" action="updatenotice.php" enctype="multipart/form-data">

<p><h1>  Welcome  Admine</h1></p>
<form>

	<table class="table" >
		<div>
<tr>
	<td>
<h2><b>Title</b></h2>
 <input type="text" name="title" value="<?php echo $notice_title;?>"></th>
</td>
</tr>

 <tr>
	<td>
	<h2><b>Detail</b></h2>	
 
<textarea name="detail"><?php echo $notice_detail;?></textarea>
 </td>
</tr>




<center><td><b><input name="submit" type="submit" value="update" class="button3"></b></td></center><td></tr	>
</table>

<input type="hidden" name="id" value="<?php echo $id;?>">
</form>
</body>
</html>
