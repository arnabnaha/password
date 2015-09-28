<!doctype html>
<html>
<head>
<title>Register</title>
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
<h1>REGISTER FOR ACCOUNT AND PASSWORD INFORMATION WEBSITE</h1>
</header>
<p><a href="index.php">Login</a></p>
<h3>Registration Form</h3>
<table width="400">
<form action="register.php" method="POST">
<tr><td>Username: </td><td><input type="text" name="user"></td></tr><br />
<tr><td>Password: </td><td><input type="password" name="pass"></td></tr><br />
</table>
<br>
<input type="submit" value="Register" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=mysql_real_escape_string($_POST['user']);
	$pass=mysql_real_escape_string($_POST['pass']);

	$con=mysql_connect('localhost','root','Your Password') or die(mysql_error());
	mysql_select_db('pwdinfo') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM user WHERE username='".$user."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	//md5() calculates the md5 hash of a string
	$encrypt_password=md5($pass);
	
	$sql="INSERT INTO user(username,password) VALUES('$user','$encrypt_password')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created. Click on Login above to Log in.";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>
</center>
</body>
</html>
