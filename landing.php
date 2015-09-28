<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<html>
<head>
<title>Account Password Information</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
header {

     background: #efefef;
	 padding: 20px 10px;
	 border: 6px;
}
</style>
</head>

<body>
<center>
<header>
<h1>ACCOUNT AND PASSWORD INFORMATION</h1>
<h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>
</header>
<div id="nav">
  <div id="nav_wrapper">
    <ul>
	  <li><a href="form.php">ADD ACCOUNT INFORMATION</a></li><li>
	  <a href="search_form.php">SEARCH ACCOUNT INFORMATION</a></li>
	</ul>
  </div>
</div>
</center>
</body>
<footer>
<p align=center>All rights reserved @ Your Name</p>
<p align=center>Contact: <a href="mailto: Your_Email@domain.com"></a>Your_Email@domain.com</p>
</footer>
</html>
<?php
}
?>
