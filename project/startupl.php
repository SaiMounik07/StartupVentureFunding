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

$u=$_POST['uname'];
$p=$_POST['pass'];
$_SESSION['luser']=$u;
$_SESSION['lpass']=$p;

		$u = stripcslashes($u);  
        $p = stripcslashes($p);  
        $u = mysqli_real_escape_string($conn, $u);  
        $p = mysqli_real_escape_string($conn, $p);  
      
        $sql = "select *from startup where name = '$u' and password = '$p'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            header('Location:startupm.php');
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
