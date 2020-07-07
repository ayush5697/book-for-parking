  <?php

  if (isset($_POST['submit']))
  { 
  include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];
$mobile = $_POST['mobile'];

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
?>  
