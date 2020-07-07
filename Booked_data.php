<?php include "header.php"; ?>
<div class="container">
	<h2>Booking Information</h2>
            
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>FullName</th>
        <th>City</th>
        <th>Book Date</th>
        <th>Vichle Type</th>
        <th>Gender</th>
        <th>License NO.</th>
      </tr>
    </thead>
    <tbody>
       <?php
          $con=mysqli_connect('localhost','root','','ayushverma');
          $qry="select *from booking";
          $info=mysqli_query($con,$qry);

                         if ($info->num_rows > 0) 
                            {
                              while($sinfo = $info->fetch_assoc())
                                {
                                   ?>
                                      <tr>
                                        <td><?php echo $sinfo['name']; ?></td>
                                        <td><?php echo $sinfo['city']; ?></td>
                                        <td><?php echo $sinfo['book_date']; ?></td>
                                        <td><?php echo $sinfo['vichle_type']; ?></td>
                                        <td><?php echo $sinfo['gender']; ?></td>
                                        <td><?php echo $sinfo['License_no']; ?></td>
                                        
                                         
                                      </tr>
                                  <?php
                                 }
                            }
                        ?>              
                                    
    </tbody>
  </table>
</div>
<?php include "footer.php"; ?>