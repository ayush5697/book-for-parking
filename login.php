 <?php
session_start();

if(isset($_SESSION['user_n1']))
{
  header('location:index.php');

}

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
  background:lightblue;
  background-clip: border-box;  
}


 /*{
  border: 1px solid red;
  outline: 5px dotted green;
}
.Button3 {background-color: #f44336;width: 80px} /* Red */
          
     </style>
      
</head>
<body >

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
	   <li class="active"><a href="login.php" style="background-color:orange">Login</a></li>
     <li><a href="event_list.php" style="background-color:black;">Event</a></li>
    <li><a href="parking_list.php" style="background-color:black;">Book Parking Area</a></li>
    <li><a href="gallery.php" style="background-color:black;">Gallery</a></li>


         <!--  <li><a href="booking.php">Booking</a></li>
           <li><a href="Booked_data.php">Booking all Data</a></li>-->
       
</ul>
  </div>
</nav>

<div>	 
 <form action="#" method="POST">
  <table width="500" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <tr>
       <td align="right"><b>User Mobile</b></td>
      <td><input name="uname" type="text" class="Input" required></td>
    </tr>
    <tr>
      <td align="right"><b>Password</b></td>
      <td><input name="password" type="password" class="Input" required></td>
    </tr>
  </table>
  <center><td><b><input name="submit" type="submit" value="Login" class="Button3"></b></td></center>
 <center><td><b><h3> 
 <table>      
<hr><a href="register.php" id="exm">Sign UP</a> </h3></b></td> </center>
<center><td><b><h3>       
<hr><a href="forgotpassword.php" id="exm">Forgot Password</a> </h3></b></td> </center></table><br><br><br><br>
</form>
</div>

<?php
 include "footer.php";
?>


<?php
      
     if(isset($_POST["submit"]))
      {
        include("connection.php");
        $uname=$_POST["uname"];
        $pwd = $_POST["password"];

      $query= "SELECT mobile, name, password, user_type FROM tbl_user WHERE mobile = '$uname' AND password = '$pwd'";
      $execute = mysqli_query($con, $query);
      $fetch = mysqli_fetch_array($execute);
      $un = $fetch['mobile'];
      $pw = $fetch['password'];
      $utype = $fetch['user_type'];

      if($un == $uname && $pw == $pwd && $utype=="Admin")
      {
        //session_start();
        $_SESSION['mobile'] = $un;
        echo "<script> 
        alert('Successfully Login') 
        window.location = 'parking.php';
        </script>";
      }
      else if($un == $uname && $pw == $pwd && $utype=="Customer")
      {
        //session_start();
          //echo $utype;
          $user_n1 = $fetch['mobile'];
          echo $user_n1;
          $_SESSION['user_n']=$user_n1;
        echo "<script> 
        alert('Successfully') 
        window.location = 'booking1.php';
        </script>";
      }
      else
      {
        //echo "<script> alert('Login Failed') window.location = '#';</script>";
        //echo "Login Failed";

        echo "<script> 
        alert('User Name or Password  was Invailed !!') 
        window.location = '#';
        </script>";
      }
       }


       ?>
