<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
        .navbar li:hover{
        background-color: silver
    }    
    .use{
  font-size: 20px;
  color: white;
}
.navbar li:hover{
        background-color: silver;
    }  
ul li ul.dropdown{
        background: #f2f2f2;
        color: black;
        display: none;
        padding: 0px;
        position: absolute;
        z-index: 999;
       
    }
ul li:hover ul.dropdown{
        display: block; 
}
ul li ul.dropdown li{
        display: block;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1159B7;">
        <img src="images/logo1.jpg" height="80px" width="120px" alt="Logo not found" style="border-radius: 20px; margin-left: 20px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand"style="font-size:32px; color: white; href="#">Water Supply Management System</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                    <li class="nav-item ">
                        <a class="nav-link ml-2 active"style="font-size:22px; color: white;" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                        <li><a class="nav-link ml-2"style="font-size:22px; color: white;" href="#">Login</a>
                            <ul class="dropdown" style="list-style-type: none;">
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="login.php">As User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white; " href="admin.php">As Admin</a>
                    </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-2"style="font-size:22px; color: white;" href="contactus.php">Contact Us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="login-panel" style="color: white;">
                    <li>

  <div class="use">
    <?php
session_start(); 
?>
 
<li class='active' style='float:right;'>
  <?php 
  if(isset($_SESSION['login_user'])){
  if($_SESSION['logged']==true)
    { 
      echo $_SESSION['login_user'];
      echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="reg.html"><span>Login/Register</span></a></li>';
    }
}
  ?>
</div></ul>
            </div>
        </div>
    </nav>
<div class="w3-card-4" align="center" style="margin-top: 10px;">
  <img src="images/adminu.jfif" alt="Alps" height="250px">
  <div class="w3-container w3-center">
    <h4>Owner / Developer</h4>
  </div>
</div>
<div class="w3-card-4">

<header class="w3-container w3-blue">
  <h1 style="text-align: center;">Alyani Mamad</h1>
</header>

<<h1 style="text-align: center; margin-top: 20px;margin-bottom: 20px; font-style: italic;"><b>Water Supply Management System</b></h1>
<div class="content" style="margin: 20px; font-size: 20px; border: 2px solid black; padding: 15px;"><h3 style="text-align: center; font-style: italic;">About Us</h3>We get water from a variety of locations after appropriate treatment, including groundwater (aquifers), surface water (lakes and rivers), and the sea through desalination. The water treatment steps include, in most cases, purification, disinfection through chlorination and sometimes fluoridation. Treated water then either flows by gravity or is pumped to reservoirs, which can be elevated such as water towers or on the ground (for indicators related to the efficiency of drinking water distribution see non-revenue water). Once water is used, wastewater is typically discharged in a sewer system and treated in a sewage treatment plant before being discharged into a river, lake or the sea or reused for landscaping, irrigation or industrial use. Water supply service quality has many dimensions: continuity; water quality; pressure; and the degree of responsiveness of service providers to customer complaints. Many people in developing countries receive a poor or very poor quality of service.<br>
<b>Drinking water quality </b>has a micro-biological and a physico-chemical dimension. There are thousands of parameters of water quality. In public water supply systems water should, at a minimum, be disinfected—most commonly through the use of chlorination or the use of ultra violet light—or it may need to undergo treatment, especially in the case of surface water. For more details, please see the separate entries on water quality, water treatment and drinking water.</div>


</div>
<?php include("footer.php")?>
</body>
</html>