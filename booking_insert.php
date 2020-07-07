<?php
       $con=mysqli_connect('localhost','root','','ayushverma');
      
       if (isset($_POST['Submit'])) 
       {
	       	  $Name=$_POST['first_name'];
	       	  $city=$_POST['city'];
	       	  $book_date=$_POST['book_date'];
	       	  $vichle_type=$_POST['vichle_type'];
	       	  $gender=$_POST['gender'];
	       	  $License_no=$_POST['License_no'];
	       	 
	       	   
	         echo $query="insert into booking(name,city,book_date,vichle_type,gender,License_no ) values('$Name','$city','".$book_date."','$vichle_type','$gender',".$License_no.")"; 
	          $row=mysqli_query($con,$query);
	           if ($row === TRUE) 
		         {
		           ?>
		              <script type="text/javascript">
		                  alert("New record created successfully");
		                  window.open("Booked_data.php");
		              </script>
		           <?php
		         }
		        else 
		         {
		           ?>
		              <script type="text/javascript">
		                  alert("somthing Went wrong");
		                  window.open("booking.php");
		              </script>
		           <?php

		         }
	          
       } 
       
	 ?>