<?php
include('navbar.php');
?>
<style>
.container {
  width: 100%;
  margin-top: 50px;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
}
.col-10 {
  width: 10%;
}
.col-33 {
  width: 33.33%
  padding: 5px 10px;
}
.col-80 {
  width: 80%;
  padding: 5px 10px;
  margin-top: 20px;
  background-color: #00FF84;
  color: #000000;
  border: 2px solid #ffffff;
  border-radius: 10px;
}
a {
  text-decoration: none;
  cursor: pointer;
  transition: 0.3s;
}
</style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!- Meta Tags for SEO --------------->
<meta name="description" content="Heres the description">

<!- GOOGLE FONTS --------------------->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300;400;700&display=swap" rel="stylesheet">

<!- W3 CSS ---------------->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
  <div class="container">
<div class="col-33">
        <center><a href="guide_rpi.php"><img class="w3-hover-opacity" src="images/rpi_tut.png" alt="Raspberry Pi Zero W - 713techsupport.com"></a></center><b>
<center><a href="guide_rpi.php"><h3>Raspberry Pi Tutorials</h3></a></center>
</div>
  <div class="col-33">
        <center><a href="guide_ubuntu.php"><img class="w3-hover-opacity" src="images/server.png" alt="Ubuntu Server - 713techsupport.com"></a></center>
<center><a href="guide_ubuntu.php"><h3>Ubuntu Server</h3></a></center>
  </div>
    <div class="col-33">
        <center><a href="guide_truenas.php"><img class="w3-hover-opacity" src="images/truenas.png" alt="TrueNas Server - 713techsupport.com"></a></center>
<center><a href="guide_truenas.php"><h3>TrueNas Core</h3></a></center>
    </div>
    </div>


