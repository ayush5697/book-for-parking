<?php
include 'connection.php';
include 'functions.php';
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
<div class="container">
     <div class="row">
      <div class="col-sm-9">

   

<?php
 $city = $_GET['city'];

  echo '<h1>'.$city.'</h1>';

 $query="SELECT * FROM `parking` WHERE `city` = '".$city."'";
 $results = mysqli_query($con,$query);

while($row = $results->fetch_assoc()) {

    $id=$row['id'];
    $area = $row['area'];
    $capacity = $row['capacity']; 

    $totalbooking=gettotalbooking($id);
    $totalavailability=gettotalavailability($id);

    if ($totalavailability>0)
     {
        $parkingavailability = $totalavailability;
    }
  else{
     $parkingavailability = $capacity;
  }

    ?>
    <!--id:<?php echo $id;?>-->
    <h2>Area : <?php echo $area;?></h2>
    <h3>Capacity : <?php echo $capacity; ?></h3>
    <h3>Total Booked  : <?php echo $totalbooking; ?></h3>

    <h3>Total Available  : <?php echo $parkingavailability ?>(Today)</h3>
    <h3>Date  : <?php echo $date; ?></h3>
    <br><hr>




<!--<?php } ?>-->
<hr>
<a href="login.php" class="btn btn-success">Book parking Area</a>

</div>
<div>
<div class="col-sm-2" style="border: 1px solid; background-color:black;">
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
 include "footer.php";
?>