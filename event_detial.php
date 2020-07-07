<?php
include 'connection.php';
include 'functions.php';

 $id = $_GET['id'];

 $query="SELECT * FROM `event` WHERE `id` = '".$id."'";
 $results = mysqli_query($con,$query);

while($row = $results->fetch_assoc()) {
    $title = $row['event_title'];
    $date = $row['event_date'];
    $image = $row['event_image'];
    $detail = $row['event_detail'];

} 

include "header.php";
?>

 <style type="text/css">
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
     <form method="POST" action="upload.php">
<div class="container">
     <div class="row">
      <div class="col-sm-9">

    <h1>Event Name : <?php echo $title;?></h1>
    <hr><br><h2>Event Date  :   <?php echo $date;?></h2>
    <hr><br><h2>Detail      : <?php echo $detail;?></h2>
    
  <hr><br>    
  <?php
    $query = "SELECT * FROM `event` where id = '".$id."'";
    $results = mysqli_query($con,$query);
    while($row = $results->fetch_assoc()) {
     echo "<div id='img_div'>";
      echo "<img src='images/".$row['event_image']."'  width='380' height='140' >";

     echo "</div>";
    }
  ?>




</div>

<div>
<div class="col-sm-2" style="border: 1px solid; background-color:black;">
  <h1>**Notice**</h1>
  <?php 

    $noticeData = getNotice();

  ?>
   <marquee direction="up" scrollamount="15"  direction="up" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">

    <?php while($row = $noticeData->fetch_assoc()) { ?>

      <h3><p>
        <a href="notice_detail.php?id=<?php echo $row['id'];?>">

       <?php echo $row['notice_title'];?>
         
       </a>
     </p></h3>
      <p> ------------------ </p> 

 <?php   }   ?>
      
    </marquee>
</div>
</div>
</div>

</div></form>


<?php
 include "footer.php";
?>