
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mini";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "connected";
}
if (isset($_POST['submit']) && isset($_FILES['myimage'])) {
	include "dbcon.php";

	echo "<pre>";
	//print_r($_FILES['myimage']);
	echo "</pre>";
	$n=$_SESSION['luser'];
	$u=$_POST['name'];
	$s=$_POST['status'];
	$d=$_POST['des'];
	
	$img_name = $_FILES['myimage']['name'];
	$img_size = $_FILES['myimage']['size'];
	$tmp_name = $_FILES['myimage']['tmp_name'];
	$error = $_FILES['myimage']['error'];

	if ($error === 0) {
		if ($img_size > 1250000) {
			$em = "Sorry, your file is too large.";
		    header("Location: startupm.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$sql = "INSERT INTO images(uname,name,status,description,image_url) 
				        VALUES('$n','$u','$s','$d','$new_img_name')";
				$img_upload_path = 'upload/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				        echo "hi";
				if(mysqli_query($conn,$sql)){
				echo "yes";
				header("Location:home.php");
			}else
			echo "no";
			}else {
				$em = "You can't upload files of this type";
		        header("Location: startupm.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: startupm.php?error=$em");
	}

}else {
	header("Location: startupm.php");
}