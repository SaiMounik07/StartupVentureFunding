<!DOCTYPE html>
<html lang="en" >
<style>
	body{
		margin:0;
	}
.topnav {
  overflow: hidden;
  background-color: #333;
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
  
  color: #ddd;
}

.topnav a.active {
  background-color: #7702FC;
  color: white;
}
.php{
	color:#7702FC;
}
.na{
	margin-left:2%;
float:left; 
height:150px;
width:150px;

}
.desc{
	font-size: 30px;
}
.gallery{
	 width:100%;
    height:100%;
    padding:1%;
}
</style>
<body>
<div class="topnav">
  <a href="home.php">Home</a>
  <a href="contact.php">Contact</a>
  <a href="home.php" style="padding-left: 500px;">BEST STARTUPS</a>
  
  <a href="home.php"  style="float:right;">Logout</a>
</div>
<div class="php">
<?php
include "dbcon.php";
session_start();
$u=$_SESSION['luser'];
echo"<h1>  welcome ".$u." !</h1>";
?>
</div>
<div class="gallery">
	 <?php
     
     $n=$_SESSION['luser']; 
          $sql = "SELECT * FROM images";
          $res = mysqli_query($conn,  $sql);
         
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)){  ?>
  <a target="_blank" >
             <div class="alb">
             	<img class="na" src="upload/<?=$images['image_url']?>">
             	<hr>
             </div>
  </a>
  <div class="desc">
  <?php

     echo "username: " . $images["uname"]."<br>";
    echo  "Name of Project: ". $images["name"]."<br>";
    echo  "description: ". $images["description"]."<br>";
    echo  "status: ". $images["status"]."<br>";
    echo "<br>";
?>
<div>
	<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_J9NdLfGcxfvrrg" async> </script> </form>
</div>
   <?php  } 

 }?>

</div>
</div>
</body>
</html>