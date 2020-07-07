<!DOCTYPE html>
<html>
<head>
  <title>gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <style type="text/css">
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.navbar ul li a{
              border: none;
              outline: none;
              padding: 10px, 10px;
             
              background-color:yellow;
              cursor: pointer;
             }
       body
 {
    font-size: 15px;
    line-height: 1.88571;
  background-color:lightblue;
  padding: 10px, 10px;
}

.navbarnavbar ul li a{
              border: none;
              outline: none;
              background-color:black;
              cursor: pointer;
             }
</style>
</head>
<body>

  <div>

  <!-- <div class="container-fluid" style="margin-top: ">
        <h1>  <div class="item">
           <img src="images/img1.jpg" alt="" width="1px" height="1px">
          <div class="row">-->
          <div class="col-sm-2">
            <img src="images/logo.png" style="width:5px height:5px">
          
          </div>
               <div class="col-sm-9" style="width:5px height:5px">

                       <marquee> 
                           
                            <h1> <a class="logo" href="index.php" style="color:orange"><b>ONLINE</b></a>
                            <a class="logo" href="index.php" style="color:black"><b>PARKING</b></a>
              <a class="logo" href="index.php" style="color:green"><b>RESERVATION</b></a></h1>
                              
                        </marquee>
                      </div>
                    </div>
                  </div>
                      </h1> 
 </div>
</div>

<nav class="navbar">
  <div class="container-fluid">
     <div class="navbar-header">
      <a></a>
    </div>
<!--  <input class="pull-right"  style="background-color:lightblue;" alt="" width="50" height="10" type="text" placeholder="Search....">-->
    <ul class="nav navbar-nav navbar-left">
      
     <li><a href="index.php" style="background-color:black;">Home</a></li>
     <li><a href="register.php" style="background-color:black;">Sign Up</a></li>
    <li><a href="login.php" style="background-color:black;">Log in</a></li>
    <li><a href="event_list.php" style="background-color:black;">Event</a></li>
    <li><a href="parking_list.php" style="background-color:black;">Book Parking Area</a></li>
    <li><a href="gallery.php" style="background-color:orange;">gallery</a></li>


    
     
</ul>
  </div>
</nav>

<h2></h2>
<h4></h4>

<div class="responsive">
  <div class="gallery">
    
      <img src="images/img1.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add  description </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    
      <img src="images/img2.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add  description </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <!--<a target="_blank" href="img_lights.jpg">-->
      <img src="images/img5.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add  description </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
   
      <img src="images/img4.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add  description </div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">
  <p></p>
  <p></p>
</div>


</body>
</html>


<?php
include 'footer.php';
?>
