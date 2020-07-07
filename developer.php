<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  body{
    background-color: orange;
  }
body {
  font-family: Arial, Helvetica, sans-serif;
}

#exm {
  border: 10px dotted white;
  padding: 15px;
  background:orange;
  background-clip: border-box;  
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<h2>dhsbfhjdsvnkdmfz.kxncfbjhdsfhsd dshbfhjds fsdhfbsdklbfb </h2>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/ayush1.jpg" alt="ayush" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Ayush Shrivastava</h1> 
       
      <p>Website Developer</p>
      <p>Mobile No. 9685744215</p>
      <p>Email: 94ayushkumar@gmail.com</p>
    </div>
  </div >
</div>
<h1><div align="center"><b><a href="index.php" id="exm">Back To Main Page</a></b></div></h1>
</body>
</html>
