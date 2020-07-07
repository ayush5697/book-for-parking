<?php
include 'connection.php';
include 'functions.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');



}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <style type="text/css">
        .navbar ul li a{
              border: none;
              outline: none;
             
              background-color:black;
              cursor: pointer;
             }
			 body
 {
    font-size: 15px;
    line-height: 1.88571;
  background-color:lightblue;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}

     </style>

</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
      <a></a>
    </div>
   <ul class="nav navbar-nav">
       <ul class="nav navbar-nav">
    <li ><a href="index.php">Home</a></li>
    
          
          <li id="rightmenu"><a href="noticelist.php" style="background-color:">Notice</a></li>
          <li id="rightmenu"><a href="event.php" style="background-color:">Event</a></li>
          <li id="rightmenu"><a href="about.php" style="background-color:;">About</a></li>
          <li id="rightmenu"><a href="frm_parking_status.php" style="background-color:orange;">Parking Status</a>
          </li>
          <li id="rightmenu"><a href="parking.php" style="background-color:">Parking</a></li>
          <li id="rightmenu"><a href="logout.php" style="background-color:;  float: right;">LOGOUT</a></li>
         
  </div>
</nav>
  </div>
</nav>
<body>

<!--<p>Parking Reserve Status</p>-->
	<?php

if(isset($_GET['msg'])){
    echo $_GET['msg'];
   }
?>
   <br>


<?php
include 'connection.php';

$query = "SELECT * FROM `reserve_parking`";
$results = mysqli_query($con,$query);

echo "<table class='table' background-color='lightblue'>";
echo "<center><h1><b>Welcome Admin</h1>";
echo "<tr>";
echo "<th>S.N</th>";
echo "<th>User Mobile</th>";
echo "<th>User Name</th>";
echo "<th>City</th>";
echo "<th>Area/Location</th>";
echo "<th>Vehicle</th>";
echo "<th>Vehicle No</th>";
echo "<th>Parking Date</th>";
echo "<th>Parking Hour</th>";
echo "</tr>";
$i = 1;
while($row = $results->fetch_assoc()) {

  $user_name = '';
  $parking_city = '';
  $parking_area = '';

  $userDetail = getUserDetail($row['umobile']);
  $parkingDetail = getParkingDetail($row['parking_id']);


while($row_user = $userDetail->fetch_assoc()){
  $user_name = $row_user['name'];
}

while($row_parking = $parkingDetail->fetch_assoc()){
  $parking_city = $row_parking['city'];
  $parking_area = $row_parking['area'];
}

echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['umobile']."</td>";
echo "<td>".$user_name."</td>";
echo "<td>".$parking_city."</td>";
echo "<td>".$parking_area."</td>";
echo "<td>".$row['vehicle']."</td>";
echo "<td>".$row['Vehicle_No']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['hour']."</td>";




echo "</tr>";

$i++;
}

echo "</table>";


?>

</br>



  <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button3 {font-size: 16px;}

</style>
<?php
  include 'footer.php';
  ?>
</body>

</html>
