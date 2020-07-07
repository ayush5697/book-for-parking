<?php
session_start();

if(isset($_SESSION['user_n']))
{
  ///echo "session will starting"
}else
{
  header('Location:login.php');
}

include "connection.php";
$user_n = $_SESSION['user_n'];

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
    background-color: lightblue;
}
#rightmenu
{
 transform: translate(800%,0%);
  font-size: 15px;
}
     </style>
      
</head>
<body bgcolor="red">

   <div class="container-fluid" style="margin-top: 10px;">

 </div>      
  
<nav class="navbar navbar-default">
  <div class="container-fluid">
     <div class="navbar-header">
      <a></a>
    </div>
    <ul class="nav navbar-nav">
   
          <li id="rightmenu"><a href="logout.php" style="background-color:orange;">LOGOUT</a></li>
         
</ul>
  </div>
</nav>
 <?php
use phpformbuilder\Form;
use phpformbuilder\Validator\Validator;

/* =============================================
    start session and include form class
============================================= */

\
/* =============================================
    validation if posted
============================================= */



   
/* ==================================================
    The Form
================================================== */


$form->startFieldset('Please fill the form below');
$form->setCols(4, 4);
$form->groupInputs('first-name', 'last-name');
$form->addHelper('First name', 'first-name');
$form->addInput('text', 'first-name', '', 'Full Name: ', 'required');
$form->setCols(0, 4);
$form->addHelper('Last name', 'last-name');
$form->addInput('text', 'last-name', '', '', 'required');
$form->setCols(4, 8);
$form->addInput('email', 'user-email', '', 'E-Mail: ', 'required');
$form->addInput('tel', 'user-phone', '', 'Phone:', 'data-intphone=true, data-fv-intphonenumber=true, required');
$form->addInput('number', 'number-of-guests', '', 'Number of Guests: ', 'data-fv-integer, required');
$form->setCols(4, 6);
$form->groupInputs('date', 'time');
$form->addPlugin('pickadate', '#date');
$form->addHelper('Date', 'date');
$form->addInput('text', 'date', '', 'Date / Time: ', 'data-min=' . date('Y-m-d') . ', data-select-years=true, data-select-months=true, required');
$form->setCols(0, 2);
$form->addPlugin('pickadate', '#time', 'pickatime');
$form->addHelper('Time', 'time');
$form->addInput('text', 'time', '', '', 'data-interval=30, data-min=08\,30, data-max=17\,00, required');
$form->setCols(4, 8);
$form->addOption('reservation-type', 'Dinner', 'Dinner', '', 'data-icon=fa fa-cutlery');
$form->addOption('reservation-type', 'Birthday/ Anniversary', 'Birthday/ Anniversary', '', 'data-icon=fa fa-birthday-cake');
$form->addOption('reservation-type', 'Nightlife', 'Nightlife', '', 'data-icon=fa fa-moon-o');
$form->addOption('reservation-type', 'Private', 'Private', '', 'data-icon=fa fa-user-secret');
$form->addOption('reservation-type', 'Wedding', 'Wedding', '', 'data-icon=fa fa-heart');
$form->addOption('reservation-type', 'Corporate', 'Corporate', '', 'data-icon=fa fa-briefcase');
$form->addOption('reservation-type', 'Other', 'Other', '', 'data-icon=fa fa-star');
$form->addSelect('reservation-type', 'Reservation Type', 'class=selectpicker, required');
$form->startDependentFields('reservation-type', 'Other');
$form->addInput('text', 'reservation-type-other', '', '', 'placeholder=Please tell more ..., required');
$form->endDependentFields();
$form->addTextarea('special-request', '', 'Any Special Request ? ');
$form->addBtn('submit', 'submit-btn', 1, 'Submit <i class="fa fa-arrow-right fa-fw"></i>', 'class=btn btn-success ladda-button, data-style=zoom-in');
$form->endFieldset();

// jQuery validation
$form->addPlugin('formvalidation', '#booking-form');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Booking Form - Php Form Builder</title>
    <meta name="description" content="Bootstrap Form Generator - how to create a Booking Form with Php Form Builder Class">
    <link rel="canonical" href="https://www.phpformbuilder.pro/templates/bootstrap-3-forms/booking-form.php" />
    <!-- Change the link to bootstrap.min.css according to your directory structure -->
    <link rel="preload" href="../assets/css/bootstrap.min.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php $form->printIncludes('css'); ?>
</head>
<body>
    <h1 class="text-center">Php Form Builder - Bootstrap Booking Form</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <?php
            if (isset($sent_message)) {
                echo $sent_message;
            }
            $form->render();
            ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->

    <script src="//code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JavaScript -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
        $form->printIncludes('js');
        $form->printJsCode();
    ?>
</body>
</html>