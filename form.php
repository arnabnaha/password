<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<html>
<head>
<title>Website Information Form</title>
<style>
body {

padding: 5px 5px;
}

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

<tr><td><B>Account Active: </B></td><td> <input type="checkbox" name="active" /></td></tr>

<tr><td><B>Require Address: </B></td><td> <input type="checkbox" name="req_addr" /></td></tr>

<tr><td><B>Additional Info: </B></td><td> <input type="textarea" name="notes" /></td></tr>

<br class="clear" />
<br />
</table>
</br>

<input type="submit" value="Submit" />
<input type="reset" value="Reset" />
<p align=center><button type="button" onclick="window.location.href='http://localhost/password/landing.php'">Home<a></button></p>
<p align=center><button type="button" onclick="window.location.href='http://localhost/password/search_form.php'">Search Website Data<a></button></p><br>
</form>
</center>
</body>
<footer>
<p align=center>All rights reserved @ Naha Health Clinic</p>
<p align=center>Contact: <a href="mailto: your_email@domain.com">Your_Email@domain.com</a></p>
</footer>
</html>
<?php
}
?>
