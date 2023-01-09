<?php include "dbcon.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
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

	</style>


</head>
<body>
  <div class="topnav">
  <a href="home.php">Home</a>
  <a href="contact.php">Contact</a>
  <a href="home.php" style="padding-left: 500px;">BEST STARTUPS</a>
  
  <a href="Logout.php"  style="float:right;">Logout</a>
</div>
<marquee width="100%" direction="right" height="100px">  Welcome <?php 
session_start();
$u=$_SESSION['luser'];
echo $u." !";
?>
</marquee>
     
     <div class="gallery">
     <?php
     
     $n=$_SESSION['luser']; 
          $sql = "SELECT * FROM images";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while (($images = mysqli_fetch_assoc($res))&& $row = $res->fetch_assoc()) {  ?>
             
             <div class="alb">
             	<img src="upload/<?=$images['image_url']?>">
             </div>
    <div class="desc">      		
    <?php
     echo "username: " . $row["uname"]."<br>";
    echo  "Name of Project: ". $row["name"]."<br>";
    echo  "description: ". $row["description"]."<br>";
    echo  "status: ". $row["status"]."<br>";
    echo "<br>";
     } }?>
   </div>
  </div>
  
</body>
</html>