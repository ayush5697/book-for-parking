<?php
include 'connection.php';
include 'functions.php';

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
      /* div#myCarousel {
    height:700px;
    width:1000px;
}*/
h1{ color:red; }
  a{ color:green; }

     </style>
      
</head>
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
    <li><a href="event_list.php" style="background-color:orange;">Event</a></li>
    <li><a href="parking_list.php" style="background-color:black;">Book Parking Area</a></li>

<li><a href="gallery.php" style="background-color:black;">Gallery</a></li>

    
     
</ul>
  </div>
</nav>

<div class="container">
     <div class="row">
      <div class="col-sm-9">
<h1>**Event List**</h1>
  <?php 

    $eventData = getevent();

    while($row = $eventData->fetch_assoc()) { ?>

      <hr><p>
        <a href="event_detial.php?id=<?php echo $row['id'];?>">
<h2>
       <?php echo $row['event_title'];?></h2>
         
       </a>
     </p>
      

 <?php   }   ?>
</div>
<div>
<div class="col-sm-2" style="border: 1px solid; background-color:black">
  <h1>**Notice**</h1>
  <?php 

    $noticeData = getNotice();

  ?>
   <marquee direction="up" scrollamount="15"  direction="up" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">

    <?php while($row = $noticeData->fetch_assoc()) { ?>

      <p>
        <a href="notice_detail.php?id=<?php echo $row['id'];?>">

       <?php echo $row['notice_title'];?>
         
       </a>
     </p>
      <p> ------------------ </p> 

 <?php   }   ?>
      
    </marquee>
</div>
</div>
</div>

</div>

<?php
include'footer.php';
?>


