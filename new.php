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
     <li><a href="register.php" class="active" style="background-color:orange">Registration</a></li>
     <li ><a href="login.php" >Login</a></li>
         <!--  <li><a href="booking.php">Booking</a></li>
           <li><a href="Booked_data.php">Booking all Data</a></li>-->
       
</ul>
  </div>
</nav>
<?php

ini_set("display_errors",0);// Display some Notice errors, therefore I am using this syntax for notice off

include('connection.php');// I am including connection file for connecting to database

if(isset($_POST['Submit']))

{

$name=(isset($_POST['name']));

$Mobile=(isset($_POST['Mobile']));

$email=(isset($_POST['email']));

$name=trim($_POST['name']);

$Mobile=trim($_POST['Mobile']);

$email=trim($_POST['email']);

 

if($name == "" ) {

$error= "Please Enter Your Name.";

$code= "1" ;

}

 

elseif($Mobile == "" ) {

$error= "Please enter Your Mobile No.";

$code= "2";

}

 

//check if the number field is numeric

elseif(is_numeric(trim($_POST["Mobile"])) == false ) {

$error= "Please enter numeric value.";

$code= "2";

}

 

elseif(strlen($Mobile)<10) {

$error= "Number Enter max 10 digits.";

$code= "2";

}

 

//check if email field is empty

elseif($email == "" ) {

$error= "Please enter email.";

$code= "3";

} //check for valid email

elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {

$error= 'Please enter valid email.';

$code= "3";

}

 

else{

echo "Successful submitted you form";

//final code will execute here.

}

 

}

?>



<body bgcolor="#E6E7D8">

<?php if (isset($error)) { echo "<p class='message'>" .$error. "</p>" ;} ?>

<style type="text/css" >

.error{border:1px solid red; }

.message{color: red; font-weight:italite;}

</style>

<form name= "info" id= "info" method= "post" action= "" >

<table width= "327" border= "0"  cellpadding= "5" cellspacing= "1">

<tr>

<td width= "82" >Name: </td>

<td width= "238" ><input name= "name" type= "text" value="<?php if(isset($name)){echo $name;} ?>" <?php if(isset($code) && $code == 1){echo "class=error" ;} ?> ></td>

</tr>

<tr>

<td>Email: </td>

<td><input name= "email" type= "text" id= "email" value="<?php if(isset($email)){echo $email;} ?>"<?php if(isset($code) && $code == 2){echo "class=error" ;}?> ></td>

</tr>
<tr>

<td>Password: </td>

<td><input name= "password" type= "password" id= "password" value="<?php if(isset($password)){echo $password; }?>"<?php if(isset($code) && $code == 3){echo "class=error" ;}?> ></td>

</tr>


<tr>

<td>mobile: </td>

<td><input name= "mobile" type= "text" id= "mobile" value="<?php if(isset($mobile)){echo $mobile; }?>"<?php if(isset($code) && $code == 3){echo "class=error" ;}?> ></td>

</tr>

<tr>

<td>&nbsp;</td>

<td><input type= "submit" name= "Submit" value= "Submit" /></td>

</tr>

</table>

</form>
<div>
  <?php
  if (isset($_POST['submit']))
  { 
  include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$pas= $_POST['password'];
$umobile = $_POST['mobile'];

$query= "INSERT INTO `tbl_user`(`name`, `email`, `password`,`mobile`) VALUES ('$name','$email','$password','$mobile')";

$sql=mysqli_query($con,$query);

if(!$sql)
{

echo '<script language="javascript">';
  echo 'alert("registration failed")';
  echo '</script>';//header('index.php');
}

else
{
  echo "registered successfully";
 header('location:login.php');
}
}//end if
//header('location:login.php');
?></div>

</body>

</html>