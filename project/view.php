<?php include "dbcon.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="startupm.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="upload/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
</body>
</html>