<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<html>
<head>
      <title>Search Form</title>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">

<style>

header {

     background: #efefef;
	 padding: 20px 10px;
	 border-radius: 6px;
	 
	}

	body {
	
	}
button
{
	display: block;
	font-size: 1.1em;
	font-weight: bold;
	text-transform: uppercase;
	padding: 5px 5px;
	margin: 10px auto;
	color: #CCC;
	background-color: #555;
	background: -webkit-linear-gradient(#888, #555);
	background: linear-gradient(#888, #555);
	border: 0 none;
	border-radius: 2px;
	text-shadow: 0 -1px 0 #000;
	box-shadow: 0 1px 0 #666, 0 5px 0 #444, 0 6px 6px rgba(0,0,0,0.6);
	cursor: pointer;
	-webkit-transition: all 150ms ease;
	transition: all 150ms ease;
}

button:hover, button:focus
{
	-webkit-animation: pulsate 1.2s linear infinite;
	animation: pulsate 1.2s linear infinite;
}
	
@-webkit-keyframes pulsate
{
	0%   { color: #ddd; text-shadow: 0 -1px 0 #000; }
	50%  { color: #fff; text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff; }
	100% { color: #ddd; text-shadow: 0 -1px 0 #000; }
}
		
@keyframes pulsate
{
	0%   { color: #ddd; text-shadow: 0 -1px 0 #000; }
	50%  { color: #fff; text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff; }
	100% { color: #ddd; text-shadow: 0 -1px 0 #000; }
}

button:active
{
	color: #fff;
	text-shadow: 0 -1px 0 #444, 0 0 5px #ffd, 0 0 8px #fff;
	box-shadow: 0 1px 0 #666, 0 2px 0 #444, 0 2px 2px rgba(0,0,0,0.9);
	-webkit-transform: translateY(3px);
	transform: translateY(3px);
	-webkit-animation: none;
	animation: none;
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
<button type="button" onclick="window.location.href='form.php'">ADD NEW DATA<a></button>
</form>
</center>
</body>
<footer>
<p align=center>All rights reserved @ Naha Health Clinic</p>
<p align=center>Contact: <a href="mailto: contactus@nahahealthclinic.com">contactus@nahahealthclinic.com</a></p>
</footer>
</html>
<?php
}
?>