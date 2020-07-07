<?php
include "about_function.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>


    .footer-distributed{

  background-color: #292c2f;

  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);

  box-sizing: border-box;

  width: 100%;

  text-align: left;

  font: bold 16px sans-serif;
  padding: 15px 50px;

  margin-top: 5px;

}



.footer-distributed .footer-left,

.footer-distributed .footer-center,

.footer-distributed .footer-right{

  display: inline-block;

  vertical-align: top;

}



/* Footer left */



.footer-distributed .footer-left{

  width: 40%;

}



/* The company logo */



.footer-distributed h3 {

  color:  #ffffff;

  font: normal 15px 'Cookie', cursive;

  margin: 0;

}


.footer-distributed h3 img{

  width: 100px;
  height: 100px;
  position: left;
  border-radius: 50%;
  cursor: pointer;
}


.footer-distributed h3 span{

  color:  white;

}



/* Footer links */



.footer-distributed .footer-links{

  color: blue;

  margin: 20px 0 12px;

  padding: 0;

}



.footer-distributed .footer-links a{

  display:inline-block;

  line-height: 1.8;

  text-decoration: none;

  color:  inherit;

}



.footer-distributed .footer-company-name{

  color:blue;

  font-size: 14px;

  font-weight: normal;

  margin: 0;

}



/* Footer Center */



.footer-distributed .footer-center{

  width: 35%;

}



.footer-distributed .footer-center i{

  background-color:  #fb2525;

  color: #ffffff;

  font-size: 25px;

  width: 38px;

  height: 38px;

  border-radius: 50%;

  text-align: center;

  line-height: 42px;

  margin: 10px 15px;

  vertical-align: middle;

}



.footer-distributed .footer-center i.fa-envelope{

  font-size: 17px;

  line-height: 38px;

}



.footer-distributed .footer-center p{

  display: inline-block;

  color: #ffffff;

  vertical-align: middle;

  margin:0;

}



.footer-distributed .footer-center p span{

  display:block;

  font-weight: normal;

  font-size:14px;

  line-height:2;

}



.footer-distributed .footer-center p a{

  color:  #5383d3;

  text-decoration: none;;

}





/* Footer Right */



.footer-distributed .footer-right{

  width: 20%;

}



.footer-distributed .footer-company-about{

  line-height: 20px;

  color:  white;

  font-size: 13px;

  font-weight: normal;

  margin: 0;

}



.footer-distributed .footer-company-about span{

  display: block;

  color:  yellow;

  font-size: 14px;

  font-weight: bold;

  margin-bottom: 20px;

}



.footer-distributed .footer-icons{

  margin-top: 25px;

}



.footer-distributed .footer-icons a{

  display: inline-block;

  width: 35px;

  height: 35px;

  cursor: pointer;

  background-color: blue;

  border-radius: 2px;



  font-size: 20px;

  color: #ffffff;

  text-align: center;

  line-height: 35px;



  margin-right: 3px;

  margin-bottom: 5px;

}



/* If you don't want the footer to be responsive, remove these media queries */



@media (max-width: 100px) {



  .footer-distributed{

    font: bold 14px sans-serif;

  }



  .footer-distributed .footer-left,

  .footer-distributed .footer-center,

  .footer-distributed .footer-right{

    display: block;

    width: 100%;

    margin-bottom: 40px;

    text-align: center;

  }



  .footer-distributed .footer-center i{

    margin-left: 0;

  }

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<footer class="footer-distributed">



      <div class="footer-left">
 <p class="footer-company-about">

      <!--<strong>  <span>contact </span></strong>-->
  <b><a href="developer.php" id="">Contact Developer</a>
           <p>
    <h3>  </h3></p>
     
        <div class="footer-icons">



          <a href=" https://www.facebook.com/talk2ayush"><i class="fa fa-facebook"></i></a>

          <a href="#"><i class="fa fa-twitter"></i></a>

          <a href="https://www.instagram.com/mr_ayush_verma/"><i class="fa fa-instagram"></i></a>
<a href="https://www.linkedin.com/in/ayush-kumar-8bb9aa17b/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
         <a href="https://web.skype.com/" class="fa fa-skype"></a>



        </div>



      </div>



         
      </div>



      <div class="footer-center">



        <div>

          <i class="fa fa-map-marker"></i>

          <p><span> Bhopal, India</span></p>

        </div>



        <div>

          <i class="fa fa-phone"></i>

          <p><span>+91 9685744215</span></p>

        </div>



        <div>

          <i class="fa fa-envelope"></i>

          <p><span>94ayushkumar@gmail.com</span></p>

        </div>

<div>
  <p><strong>Copyright@2019</strong></p>
</div>

      </div>



      <div class="footer-right">



        <p class="footer-company-about">

        <span>About Us </span>
           
<?php
    $aboutData = getabout();
  ?>
    


    <?php while($row = $aboutData->fetch_assoc()) { ?>

      <h3>
          <?php echo $row['about'];?>        
     </h3>
      
 <?php   }   ?>
           <p>
    <h3>  </h3></p>
     
        


      </div>



    </footer>

</body>
</html>