<!doctype html>
<html>
<head>
<title>Login</title>
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
<h1>LOGIN TO ACCOUNT AND PASSWORD INFORMATION WEBSITE</h1>
</header>

<!--<p><a href="register.php">Register</a> | <a href="index.php">Login</a></p>-->
<h3>Login Form</h3>
<table width="400">
<form action="" method="POST">
<tr><td><B>Username: </B></td><td><input type="text" name="user"></td></tr><br />
<tr><td><B>Password: </B></td><td><input type="password" name="pass"></td></tr><br />
</table>
<br>	
<input type="submit" value="Login" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=mysql_real_escape_string($_POST['user']);
	$pass=mysql_real_escape_string($_POST['pass']);

	$encrypt_password=md5($pass);
	
	$con=mysql_connect('localhost','root','your password') or die(mysql_error());
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
