<?php
$sname = "localhost";
$uname = "root";
$password = "root";
$db_name = "mini";

$conn = new mysqli($sname, $uname, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>