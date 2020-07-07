<!DOCTYPE html>
<html>
<title>Price</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    }
label.cols-sm-2.control-label {
    color: white;
}


button{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
} 


#exm {
  border: 10px dotted black;
  padding: 15px;
  background:white;
  background-clip: border-box;  
}
#exm2 {
  border: 10px dotted black;
  padding: 15px;
  background:white;
  background-clip: border-box;  
}
#exm3 {
  border: 10px dotted black;
  padding: 15px;
  background:white;
  background-clip: border-box;  
}


 /*{
  border: 1px solid red;
  outline: 5px dotted green;
}
.Button3 {background-color: #f44336;width: 80px} /* Red */
          
     </style>

<body>

 <div class="container-fluid" style="margin-top: 10px;">

                        <a class="logo" href="index.php" style="color:orange"><b>ONLINE</b></a>
                            <a class="logo" href="index.php" style="color:black"><b>PARKING</b></a>
              <a class="logo" href="index.php" style="color:green"><b>RESERVATION</b></a>
                                 
 </div>      

<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
      <a></a>
    </div>
    <ul class="nav navbar-nav">
       <li><a href="index.php">Home</a></li>
     <!--<li><a href="register.php">Registration</a></li>-->
     <li class="active"><a href="login.php" style="background-color:black">Login</a></li>
     <li><a href="event_list.php" style="background-color:black;">Event</a></li>
    <li><a href="parking_list.php" style="background-color:orange;">Book Parking Area</a></li>
    <li><a href="gallery.php" style="background-color:black;">Gallery</a></li>


         <!--  <li><a href="booking.php">Booking</a></li>
           <li><a href="Booked_data.php">Booking all Data</a></li>-->
       
</ul>
  </div>
</nav>



<br>

<div class="w3-container">
  <h2></h2>
</div>

<div class="w3-row-padding">

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-orange w3-xlarge w3-padding-32">Per Hour</li>
    <li class="w3-padding-16"><h2>2 Wheeler-> 50₹</h2></li>
    <li class="w3-padding-16"><h2>4 Wheeler-> 100₹</h2></li>
    
      
    </li>
    <li class="w3-orange w3-padding-24">
      <h1><a href="login.php" id="exm">LogIn</a></h1>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-white w3-xlarge w3-padding-32">Wickley</li>
    <li class="w3-padding-16"><h2>2 Wheeler-> 1500₹ </h2></li>
    <li class="w3-padding-16"><h2>4 Wheeler-> 2000₹</h2></li>
    
    </li>
    <li class="w3-white w3-padding-24">
      <h1><a href="login.php" id="exm2">LogIn</a></h1>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-green w3-xlarge w3-padding-32">Monthly</li>
    <li class="w3-padding-16"><h2>2 Wheeler->3500₹ </h2>
    <li class="w3-padding-16"><h2>4 Wheeler</b>-> 4500₹</h2>
    
    </li>
    <li class="w3-green w3-padding-24">
      <h1><a href="login.php" id="exm3">LogIn</a></h1>
    </li>
  </ul>
</div>

</div>
<?php
include 'footer.php';
?>

</body>
</html> 
s