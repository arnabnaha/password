<!doctype html>
<html>
<head>
<title>Account & Password Website</title>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
<style>
header {

     background: #efefef;
	 padding: 20px 10px;
	 border: 6px;
}

button
{
	display: block;
	font-size: 1.1em;
	font-weight: bold;
	text-transform: uppercase;
	padding: 10px 15px;
	margin: 20px auto;
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
<h1>LOGIN TO ACCOUNT AND PASSWORD INFORMATION WEBSITE</h1>
</header>

<!--<p><a href="register.php">Register</a> | <a href="index.php">Login</a></p>-->
<img src="images/login.png">
<table width="400">
<form action="" method="POST">
<tr><td><B>Username: </B></td><td><input type="text" name="user"></td></tr><br />
<tr><td><B>Password: </B></td><td><input type="password" name="pass"></td></tr><br />
</table>
<br>
<img 
   onclick="document.getElementById('loginbuttonid').click()" 
   src="images/login_button.jpg" 
   width="80" 
   height="46" 
   alt="Login Now" 
   title="Login">
<input type="submit" id="loginbuttonid" value="Login" name="submit" style="display:none;" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=mysql_real_escape_string($_POST['user']);
	$pass=mysql_real_escape_string($_POST['pass']);

	$encrypt_password=md5($pass);
	
	$con=mysql_connect('localhost','root','summerof69') or die(mysql_error());
	mysql_select_db('pwdinfo') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM user WHERE username='".$user."' AND password='".$encrypt_password."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $encrypt_password == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: landing.php");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>
</center>
</body>
</html>