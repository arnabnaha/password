<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<html>
<head>
<title>Website Information Form</title>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
<style>
body {

padding: 5px 5px;
}

header {

     background: #efefef;
	 padding: 20px 10px;
	 border-radius: 6px;	 
}

button
{
	display: block;
	font-size: 1.1em;
	font-weight: bold;
	text-transform: uppercase;
	padding: 6px 6px;
	margin: 10px auto;
	color: #CCC;
	background-color: #555;
	background: -webkit-linear-gradient(#888, #555);
	background: linear-gradient(#888, #555);
	border: 0 none;
	border-radius: 3px;
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
<h1 align="center">ADD WEBSITE ACCOUNT INFORMATION</h1>
<h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>
</header>

<form action="connect.php" method="post" />

<table width="400">

<input type="hidden" name="id" />

<tr><td><B>Website Name: </B></td><td> <input type="text" name="web_name" required/></td></tr>

<tr><td><B>Website Address: </B></td><td> <input type="text" name="web_link" required/></td></tr>

<tr><td><B>Username: </B></td><td> <input type="text" name="user_name" required/></td></tr>

<tr><td><B>Password: </B></td><td> <input type="text" name="pass_word" required/></td></tr>

<tr><td><B>Account Active: </B></td><td> <select name="active"><option value="Yes">Yes</option><option value="No">No</option></td></tr>

<tr><td><B>Require Address: </B></td><td> <select name="req_addr"><option value="Yes">Yes</option><option value="No">No</option></td></tr>

<tr><td><B>Mobile App: </B></td><td> <select name="mob_app"><option value="Yes">Yes</option><option value="No">No</option></td></tr>

<tr><td><B>Additional Info: </B></td><td> <textarea name="notes" maxlength="300" rows="4"></textarea></td></tr>

<br class="clear" />
<br />
</table>
</br>

<input type="submit" value="Submit" />
<input type="reset" value="Reset" />
<button type="button" onclick="window.location.href='landing.php'">Home<a></button>
<button type="button" onclick="window.location.href='search_form.php'">Search Website Data<a></button>
</form>
</center>
</body>
<footer>
<p align=center>All rights reserved @ Naha Health Clinic</p>
<p align=center>Contact: <a href="mailto: contact@nahahealthclinic.org">contact@nahahealthclinic.org</a></p>
</footer>
</html>
<?php
}
?>