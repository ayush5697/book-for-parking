<?php
session_start();

if(isset($_SESSION['user_n']))
{
  ///echo "session will starting"
}else
{
  header('Location:login.php');
}

include "connection.php";
$user_n = $_SESSION['user_n'];

?>


<!DOCTYPE html>
<html>
<head>
   
  
    <title>header</title>
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
    background-color: lightblue;
}
#rightmenu
{
 transform: translate(800%,0%);
  font-size: 15px;
}
     </style>
      
</head>
<body bgcolor="red">

   <div class="container-fluid" style="margin-top: 10px;">

 </div>      
  
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
      <a></a>
    </div>
    <ul class="nav navbar-nav">
   
          <li id="rightmenu"><a href="logout.php" style="background-color:orange;">LOGOUT</a></li>
         
</ul>
  </div>
</nav>
 
<div class="container">
	
<form class="form-horizontal" action='#' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Booking detail</legend>
    </div>
    <div class="control-group">
      
 
    <div class="control-group">
      <!-- booking -->
      <label class="control-label">City</label>
      <div class="controls">

        <select name="parking_id">
          <option disabled="TRUE">Select Parking</option>
          <?php
            include "connection.php";
            $qry = "SELECT id, concat(city,', ',area) as cty FROM parking";
            $run = mysqli_query($con, $qry);
            while ($data=mysqli_fetch_assoc($run)) 
            {
          ?>
              <option value="<?php echo $data['id']?>"><?php echo $data['cty'];?></option>
          <?php
            }//end
          ?>
        </select>   
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label">Booking Date</label>
      <div class="controls">
        <input type="date" class="form-control"  name="book_date" placeholder="" class="input-xlarge" required>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label" >Vehicle type</label>
      <div class="controls">
      <select name="vehicle_type" class="form-control">
      	 <option selected="TRUE" disabled="TRUE">-vehicle type-</option>
      	 <option>Motorcycle</option>
      	 <option>Car</option>
      </select>
       </div>
    </div>

      <label class="control-label" >Vehicle Number</label>
      <input type="text" name="vehicle_number" placeholder="eg. MP-04 CH-5555" required="">
      <label class="control-label" >Book hour</label>
      <input type="text" name="book_hour" placeholder="" required="">
     
    </div>
     
    
    <hr>
     <div class="control-group">
      <div>
       <center><button type="submit" name="submit" class="btn btn-primary">submit</button></center>
      </div>
    </div>
  </fieldset>
</form>
</div>
</body>
<div>
<div>
<?php
  if (isset($_POST['submit']))
  { 
  include('connection.php');


$umobile = $_SESSION['user_n'];


$parking_id= $_POST['parking_id'];

$vehicle = $_POST['vehicle_type'];

$Vehicle_No = $_POST['vehicle_number'];

$date = $_POST['book_date'];

$hour = $_POST['book_hour'];


$query= "INSERT INTO `reserve_parking`(`umobile`,`parking_id`, `vehicle`, `Vehicle_No`,`date`,`hour`) VALUES ('$user_n','$parking_id','$vehicle', '$Vehicle_No','$date','$hour')";

//echo $query;
$sql=mysqli_query($con,$query);

if(!$sql)
{

echo '<script language="javascript">';
  echo 'alert("Parking Space not alloted")';
  echo '</script>';
}

else
{


$query= "SELECT availability FROM parking_slot WHERE parking_id = '$parking_id' AND `date` = '$date'";

      $execute = mysqli_query($con, $query);

      $fetch = mysqli_fetch_array($execute);

      if(!empty($fetch)){
       // print_r($fetch);die;

        $availability = $fetch['availability'];
        $new_availability = $availability - 1;


        $query= "update `parking_slot` SET `availability` = '".$new_availability."' WHERE parking_id = '$parking_id' AND `date` = '$date'";
        //echo "$query";
          $results = mysqli_query($con,$query);



$sql=mysqli_query($con,$query);

       } 

       else
       
        {

        $query= "SELECT capacity   FROM parking WHERE id = $parking_id";
//echo $query;die;
        $execute = mysqli_query($con, $query);

      $fetch = mysqli_fetch_array($execute);
         $capacity = $fetch['capacity'];
        $new_capacity=$capacity - 1;
       // echo $new_capacity;die;

       $query= "INSERT INTO `parking_slot`(`parking_id`, `date`, `availability`) VALUES ($parking_id,'$date',$new_capacity)";


$sql=mysqli_query($con,$query);


       }





  echo '<script language="javascript">';
  echo 'alert("Parking Space alloted")';
  echo '</script>';
}
}//end if
?>
</div>
</div>
<?php include "footer.php"; ?>
</html>