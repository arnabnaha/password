<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<html>
<head>
<title>WEBSITE DATBASE RECORDS</title>
<style>

header {

     background: #efefef;
	 padding: 20px 10px;
	 border-radius: 6px;
	 
 }
 
</style>
</head>
<body>
<center>
<header>
<h1>WEBSITE RECORD DELETE</h1>
<h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>
</header>
<?php

$con = mysqli_connect("localhost","root","");
if (!$con) {
die("can not connect: " . mysqli_error());
}
mysqli_select_db($con, "pwdinfo");

if( isset( $_GET['id']) )
{
     $id = $_GET['id'];
	 $sql= "DELETE FROM password WHERE id = '$id'";
	 $result= mysqli_query($con, $sql) or die("Failed" . mysqli_error());
}
if($result) {
echo 'You have deleted the record';
}else{
echo '<p> An error has occured</p>';
echo mysqli_error();
echo '<p>'.$query.'</p>';
}
}
?>
<br><br>
<button type="button" onclick="window.location.href='landing.php'">Home<a></button>
<button type="button" onclick="window.location.href='form.php'">Add New Data<a></button>
<button type="button" onclick="window.location.href='search_form.php'">Search Website Records<a></button>
</center>
</body>
</html>