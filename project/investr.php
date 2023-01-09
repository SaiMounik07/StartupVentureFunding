<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mini";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$n=$_POST['uname'];
$p=$_POST['pass'];
$rp=$_POST['rpass'];
$num=$_POST['num'];

if($p!=$rp)
	echo "Password doesnt match";
else{
	$sql="INSERT INTO investor(name,password,phnumber)
	values('$n','$p','$num')";
}
if (mysqli_query($conn, $sql)) {
header('Location:home.php');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>