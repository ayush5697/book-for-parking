<?php
  include('connection.php');

   session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



?>
  <!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
   body{
       background-color:#D6EAF8;
    }
</style>
</head>
<body>
<div id="content">
  <?php
    $result = mysqli_query($connection, "SELECT * FROM event");
    while ($row = mysqli_fetch_array($result)) {
     // echo "<div id='img_div'>";
        //echo "<img src='images/".$row['image_name']."' >";
     // echo "</div>";
    }
  ?>

  <form method="POST" action="upload_image.php" enctype="multipart/form-data">
  	
    <div>
  	 Upload Image :  <input type="file" name="image">
  	</div>
  	
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>
