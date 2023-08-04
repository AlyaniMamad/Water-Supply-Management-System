 <?php
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
	 
footer{
    	border-top: 1px solid #0278BA;
    	padding: 10px 0;
    	width: 100%;
    	text-align: center;
    	margin: 30px 0 0;
    	background-color: #ddd;
}
.middle img{
	width: 100%;
	margin-top: 0px;
	left: 0;
	right: 0;
}
.card{
	margin-top: 40px;
	align-items: center;
	margin-right: 40px;
	margin-left: 40px;
	border: 2px solid black;
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
                <a class="navbar-brand"style="font-size:32px; color: white;  href="#">Water Supply Management system</a>
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
                
<div class="use" style="color: white;">
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="images/b.jpg"  height="400px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="images/aa.jpg" height="400px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="images/g.jpg" height="400px" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="images/c.jpg" height="400px" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="images/f.jpeg" height="400px" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev"  href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon"  aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="content" style="margin: 20px; font-size: 20px; border: 2px solid black; padding: 15px;"><h2 style="text-align: center; font-style: italic;">GOAL</h2>Our goal is to bring safe, usable water to underdeveloped villages to prevent unnecessary illness and death. Access to potable water with easily maintained infrastructure has the potential to vastly improve public health conditions and contribute to sustainable community growth and development.</div>
<h2 style="text-align: center;"><u><b>Our Products</b></u></h2>
	<div class="row">
	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'water');


	$query = " SELECT `name`, `image`, `price`,`qtytype` FROM `product` order by id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<form method="POST">
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase" style="border: 2px solid black;"> <?php echo
					 $product['name'];  ?>   </h6>

					<div>
						 <img src="images/<?php echo
					 $product['image'];  ?>" alt="phone" class="img-fluid mb-2" >
                     <h4 style="align-items: center;">&#8377; <?php echo $product['price']."/".$product['qtytype'];  ?></h4>

					</div>
					<div class="btn-group d-flex">
						

            <a  class="btn btn-success flex-fill" style="border: 2px solid black;" href="user.php?pn=<?php echo $product['name']."&pr=".$product['price'];?>"> Add to cart </a>
					</div>
                    

				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>


</div>
<br><br>

<?php include('footer.php');?>
</body>
</html>