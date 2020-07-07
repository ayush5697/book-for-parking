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

<h1>Add Event</h1>

<div class="container">
  <form method="POST" action="Save_event.php"  enctype="multipart/form-data">
    <label for="fname">Event Title</label>
    <input type="text" id="title" name="title">
    <hr><label for="fname">Event Date</label>
    <input type="date" id="date" name="date">
   
    <hr><label for="detail">Event Detail</label>
    <textarea id="detail" name="detail" placeholder="Write something.." style="height:200px"></textarea>

    <div>
     Upload Image :  <input type="file" name="image">
    </div>
    
    <div>
     
    <input type="submit" value="Save">
  </form>
</div>

</body>
</html>
