<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['mobile']))
{
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h1>Add Parking</h1>

<div class="container">
  <form method="POST" action="Save_parking.php">
    <hr><label for="fname">City</label>
    <input type="text" id="city" name="city">
    <hr><label for="fname">Area/Location</label>
    <input type="text" id="area" name="area">
   <hr> <label for="fname">Capacity</label>
    <input type="text" id="capacity" name="capacity">
    

    <input type="submit" value="Save">
  </form>
</div>

</body>
</html>
