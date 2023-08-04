<?php
session_start();
if(!isset($_SESSION['login_user']))
header("location: login.php");

if(!isset($_GET['pn'])){
header("location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	  <style type="text/css">
	 
   .topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.middle img{
	width: 100%;
	margin-top: 0px;
	left: 0;
	right: 0;
}
.card{
	margin-left: 120px;
	margin-right: 120px;
	margin-top: 40px;
}
.heading{
	text-align: center;
}
.l{
  font-size: 30px;
  padding: 5px;
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
 
if($_SESSION['login_user']!="alyani"){
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
    if(isset($_SESSION['type']))
    {
         
    }
}
  ?>
</div></ul>
            </div>
        </div>
    </nav>
    <br><h2 style="text-align: center; font-style: italic;">Place Your Order</h2>

	
<h6 style="text-align: center;color: red; font-style: italic;">* Online payment user first payment then place order</h6>
<form action="user_cong.php" method="POST">
 
 <br><br><div class="card" style="width: 500px; margin: auto; padding: 10px;">

 <h4> Quantity </h4>
 <input  type="number" name="quantity" id="qty" class="form-control" placeholder="quantity in ammount" required min="1" max="100"   ><br>
 <h6>Payable Ammount : <input type="text" name="amt" id="amnt" readonly="" value="<?php if(isset($_GET['pr'])) echo $_GET['pr'];?>"></h6>
 <h4> Payment method </h4>

 <input type="radio" name="payment" value="COD" checked onchange="fun()" style="margin-top: 5px;"><h6 style="position:relative;bottom:16px ;left:15px">Cash on Delivery</h6>
  <input type="radio" name="payment" id="onlinepayset"  onchange="fun()" value="net" style="margin-top: 5px;"><h6 style="position:relative;bottom:16px ;left:20px">Online Pay<br><br>
   <div>
  
</div>
  <h6>Transaction id (only for online payment user) </h6>
  <input type="text" name="transaction" id="onlinepay"><br>
  <h4>Type of water</h4>
  <input type="radio" name="watertype" value="Water bottle" style="margin-top: 5px;" required="" <?php if(isset($_GET['pn'])){ if($_GET['pn'] == "Drinking Water") echo "checked"; }?>/><h6 style="position:relative;bottom:16px ;left:15px">Water bottle</h6>
  <input type="radio" name="watertype" value="Water Can" style="margin-top: 5px;" <?php if(isset($_GET['pn'])){ if($_GET['pn'] == "Water Can") echo "checked"; }?>><h6 style="position:relative;bottom:16px ;left:15px">Water Can</h6>
  <input type="radio" name="watertype" value="Water Tanker"  style="margin-top: 5px;" <?php if(isset($_GET['pn'])){ if($_GET['pn'] == "Normal Water") echo "checked"; }?>><h6 style="position:relative;bottom:16px ;left:15px">Water Tanker</h6><br>

 <button class="btn btn-success" name="done" style="background-color: #1159B7;" onsubmit="alert('ORDER PLACED SUCCESSFULLY!')"> Submit </button><br>

 </div>
 </form>
<script>
document.getElementsByName("quantity")[0].addEventListener('change', doThing);

/* function */
function doThing(){
  var val = document.getElementById("qty").value;
  var val1 = <?php if(isset($_GET['pr'])) echo $_GET['pr'];?>;
  var total = val * val1;
  document.getElementById("amnt").value="";
  document.getElementById("amnt").value=total;
}

</script>
<?php
}else{
  echo "You are admin";
}
?>
<br>
<center><div class="" style="width:80%;">
      <h4>Previous order</h4>
        <div class="col-lg-12">
          <table class="table table-striped table-hover table-bordered">
          <tr>
            <th>Quantity</th>
            <th>Payemnt</th>
            <th>WaterType</th>
            <th>Total</th>
            <th>Delete</th>
          </tr>
          <?PHP

  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'water');

  $set=$_SESSION['login_user'];
  $query = " SELECT * FROM `user` where username='$set' ";

  $queryfire = mysqli_query($con, $query);

  $num = mysqli_num_rows($queryfire);
  if($num > 0){
    while($user = mysqli_fetch_array($queryfire)){
      ?>
          <tr>
            <td><?php echo $user['quantity']; ?></td>
            <td><?php echo $user['payment']; ?></td>
            <td><?php echo $user['watertype']; ?></td>
            <td><?php echo $user['amt']; ?></td>
            <td> <button class="btn-danger btn"> <a href="q1delete.php?id=<?php echo $user['id']; ?>" class="text-white"> Cancel Order </a>  </button>
           
          </tr>
          <?php
             }
          }
          ?>
          
        </table>
        </div>
    
</div></center>
<br>

<?php include("footer.php")?>
<script type="text/javascript">

  function fun()
  {
    var i = document.getElementById("onlinepayset");
    if(i.checked == true)
    {
      
      document.getElementById("onlinepay").required = true;
      document.getElementById("onlinepay").setAttribute("required");  
      var i = document.getElementById("onlinepay").attributes["required"]="";
    }
    else
    {
      window.location.replace('user.php');
    }
  }
</script>
<form>

  </form>
</body>
</html>