<!doctype html>
<html>
<head>
<title>Register</title>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
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
<p><a href="login.php">Login</a></p>
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
	
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'pwdinfo') or die("cannot select DB");
	
	$user=mysqli_real_escape_string($con, $_POST['user']);
	$pass=mysqli_real_escape_string($con, $_POST['pass']);

	$query=mysqli_query($con, "SELECT * FROM user WHERE username='".$user."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
	//md5() calculates the md5 hash of a string
	$encrypt_password=md5($pass);
	
	$sql="INSERT INTO user(username,password) VALUES('$user','$encrypt_password')";

	$result=mysqli_query($con, $sql);


	if($result){
	echo "Account Successfully Created. Kindly click on the login link above to login.";
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