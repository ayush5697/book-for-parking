<?php
include 'connection.php';
include 'functions.php';

 $id = $_GET['id'];

 $query="SELECT * FROM `notice` WHERE `id` = '".$id."'";
 $results = mysqli_query($con,$query);

while($row = $results->fetch_assoc()) {
    $title = $row['notice_title'];
    $detail = $row['notice_detail'];
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
<div class="container">
     <div class="row">
      <div class="col-sm-9">

    <h1>Notice  :  <?php echo $title;?></h1>
    <hr><br><h2>Detail  :  <?php echo $detail;?></h2>


</div>
<div>
<div class="col-sm-2" style="border: 1px solid; background-color:black;">
  <p><h1>**Notice**</h1 ></p>
  <?php 

    $noticeData = getNotice();

  ?>
   <marquee direction="up" scrollamount="15" onmouseover="this.stop();" onmouseout="this.start();">

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