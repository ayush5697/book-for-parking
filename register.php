<!DOCTYPE html>
<html>
<head>

<title>header</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <style type="text/css">


      body  {
  background-image: url("images/jpg");
  background-color: #cccccc;
}
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
     background-color: ;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:lightblue ;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color:lightblue;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color:red;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}




     </style>
</head>
<body>
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
     <li><a href="register.php" class="active" style="background-color:orange">Sign Up</a></li>
     <li ><a href="login.php" >Login</a></li>
     <li><a href="event_list.php" style="background-color:black;">Event</a></li>
    <li><a href="parking_list.php" style="background-color:black;">Book Parking Area</a></li>
    <li><a href="gallery.php" style="background-color:black;">Gallery</a></li>


         <!--  <li><a href="booking.php">Booking</a></li>
           <li><a href="Booked_data.php">Booking all Data</a></li>-->
       
</ul>
  </div>
</nav>






<script>  



function validateform(){  
var name=document.myform.name.value;
var email=document.myform.email.value;
var emailp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

var password=document.myform.password.value;
var mobile=document.myform.mobile.value;  
var mobilep = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;


if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  

}

if (email == '' || !emailp.test(email))
{
    alert('Please enter a valid email address.');
    return false;
}       

if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  } 


if(mobile=='' || !mobilep.match(mobile))
        {
      alert('Please enter a  mobile number.');
      return false;
        }
      



}
</script>  
<body>  
<form name="myform" method="post" action="post_registration.php" onsubmit="return validateform()" >  
<b>Name</b> <input type="text" name="name"><br/>  
<b>Email</b> <input type="text" name="email" ><br/> 
<b>Password</b> <input type="password" name="password"><br/> 
<b>Mobile number</b> <input type="text" name="mobile"><br/>
<center><input type="submit" value="Register" name="submit"></center>  
</form>
<?php
 include "footer.php";
?>
<div>


</body>
</html>
