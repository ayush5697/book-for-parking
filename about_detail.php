<?php
include 'connection.php';
include 'about_function.php';

 $id = $_GET['id'];

 $query="SELECT * FROM `about` WHERE `id` = '".$id."'";
 $results = mysqli_query($con,$query);

while($row = $results->fetch_assoc()) {
    $about = $row['about'];
   
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
     </style>
<div class="container">
     <div class="row">
      <div class="col-sm-9">

   
    <p><?php echo $about;?></p>


</div>
<div>

  
  <?php 

    $aboutData = getabout();

  ?>
   

    <?php while($row = $aboutData->fetch_assoc()) { ?>

      <p>
        <a href="about_detail.php?id=<?php echo $row['id'];?>">

     
         
      <?php echo $row['about'];?>
         
       </a>
     </p>
      <p> ------------------ </p> 

 <?php   }   ?>
      
    
</div>
</div>
</div>

</div>


<?php
 include "footer.php";
?>