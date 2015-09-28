<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<html>
<head>
      <title>Search Form</title>

<style>

header {

     background: #efefef;
	 padding: 20px 10px;
	 border-radius: 6px;
	 
	}

	body {
	
	}
</style>
</head>

<body>
<center>
<header>
<h1>SEARCH WEBSITE ACCOUNT INFORMATION</h1>
<h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>
</header>

<!-- form to get key detail of record in database -->
<form name="form" method="POST" action="search.php">
<table width="400">
<tr><td><B>Enter Website Name: </B></td><td><input type="text" name="search" required></td></tr><br><br>
</table>
<br>
<input type="submit"  value="submit" />
<input type="reset" value="Reset" />
<p align=center><button type="button" onclick="window.location.href='http://localhost/password/landing.php'">Home<a></button></p><br>
</form>
</center>
</body>
<footer>
<p align=center>All rights reserved @ Your Name</p>
<p align=center>Contact: <a href="mailto: Your_Email@domain.com">Your_Email@domain.com</a></p>
</footer>
</html>
<?php
}
?>
