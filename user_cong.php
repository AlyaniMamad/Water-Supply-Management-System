<?php
session_start();
$quantity = $_POST['quantity'];
$payment = $_POST['payment'];
$watertype = $_POST['watertype'];
$transaction = $_POST['transaction'];
$amt = $_POST['amt'];
echo $_SESSION['login_user'];
$username=$_SESSION['login_user'];
if (!empty($quantity)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "water";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
      $INSERTQUERY="INSERT INTO user VALUES(null,'$username','$quantity','$payment','$watertype',null,'$amt');";
     echo $INSERTQUERY;
      $result=mysqli_query($conn,$INSERTQUERY);
     header("location:user.php");
     
   }
?>