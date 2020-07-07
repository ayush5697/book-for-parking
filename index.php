<?php
 include "header.php";
 include "functions.php";
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
  a{ color:green;} 
    
     </style>

     <div class="row">
      <div class="col-sm-9">
    


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
	<li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/img1.jpg" alt=""width="1350" height="500">
    </div>

	
	<div class="item">
      <img src="images/img13.jpg" alt=""width="1350" height="500">
    </div>
	
	<div class="item">
      <img src="images/img3.jpg" alt=""width="1350" height="500">
    </div>
	
	<div class="item">
      <img src="images/img4.jpg" alt=""width="1350" height="500">
    </div>

    <div class="item">
      <img src="images/img5.jpg" alt=""width="1350"height="500">
    </div>
  </div>

  <!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div>
<div class="col-sm-2" style="border: 1px solid; background-color:black;">
  <h1>**Notice**</h1>
  <?php 

    $noticeData = getNotice();

  ?>
    <marquee direction="down" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">


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




<?php
 include "footer.php";
?>