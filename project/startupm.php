<!DOCTYPE html>
<html>
<style type="text/css">
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
<body>
<div class="topnav">
  <a href="home.php">Home</a>
  <a href="contact.php">Contact</a>
  <a href="home.php" style="padding-left: 500px;">BEST STARTUPS</a>
  
  <a href="Logout.php"  style="float:right;">Logout</a>
</div>
</body>
</html>
<?php  
session_start();
$sname = "localhost";
$uname = "root";
$password = "root";
$db_name = "mini";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
	exit();
}
$u=$_SESSION['luser'];
echo "<h2> Welcome ".$u." !</h2>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		.main {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
		*{
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #7702FC;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: lightgrey;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	</style>
</head>
<body>
	<div class="main">
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
           <div class="container">
  
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Status of project</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="status" >
      </div>
    </div>
    
    <div class="row">
      <div class="col-75">
        <label for="subject">Description</label>
      </div>

      <div class="col-75">
        <input typr="text" id="subject" name="des"  style="float: left;
  width: 70%;height: 100px;
  margin-top: 6px;"></textarea>
      </div>
      <div class="col-75">
        <label for="lname">Upload Image</label>
      </div>
      <div class="col-75">

      	 <input type="file" 
                  name="myimage">
     </div>
    </div>
    <div class="row">
     <input type="submit" 
                  name="submit"
                  value="Upload">
    </div>
  </form>
</div> 
 
</div> 
</body>
</html>