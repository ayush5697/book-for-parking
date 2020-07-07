<?php
include 'connection.php';
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

.th { 
            border-left: 6px solid black; 
            height: 200px; 
            position:absolute; 
            left: 50%;
     </style>

</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
      <a></a>
    </div>
    <ul class="nav navbar-nav">
    <li ><a href="index.php">Home</a></li>
      
          

          
</ul>
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
echo "<tr>";
echo "<th>S.N</th>";
echo "<th>USer Mobile</th>";
echo "<th>Parking Id</th>";
echo "<th>Vehicle</th>";
echo "<th>Vehicle No</th>";
echo "<th>Parking Date</th>";
echo "<th>Parking Hour</th>";
echo "</tr>";
$i = 1;
while($row = $results->fetch_assoc()) {

echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['umobile']."</td>";
echo "<td>".$row['parking_id']."</td>";
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
