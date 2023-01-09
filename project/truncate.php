<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mini";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql="truncate table images";
if (mysqli_query($conn, $sql)) {
echo "deleted all records";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>