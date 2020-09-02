<html>
<head>
<title>CREATE DATABASE TABLE</title>
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
<h1>DATABASE TABLE CREATION</h1>
</header>
<?php
$con = mysqli_connect("localhost","root","");
if (!$con) {
die ("Cannot Connect to the server: " . mysqli_error());
}

mysqli_select_db($con, "pwdinfo");

$tbl_password = "CREATE TABLE IF NOT EXISTS password (
id INT(11) NOT NULL AUTO_INCREMENT,
web_name VARCHAR(255) NOT NULL,
web_link VARCHAR(255) NOT NULL,
user_name VARCHAR(255) NOT NULL,
pass_word VARCHAR(255) NOT NULL,
active VARCHAR(255) NOT NULL,
req_addr VARCHAR(255) NOT NULL,
mob_app VARCHAR(255) NOT NULL,
notes VARCHAR(255) NULL,
date timestamp,
PRIMARY KEY(id)
)";

$query = mysqli_query($con, $tbl_password);
if($query === TRUE) {
echo "<h3>Table PASSWORD created successfully</h3>";
} else {
echo "<h3>Table PASSWORD Not created</h3>";
}
//////////////////////////////////////////////
$tbl_user = "CREATE TABLE IF NOT EXISTS user (
id int(11) NOT NULL AUTO_INCREMENT,
username varchar(50) NOT NULL,
password varchar(50) NOT NULL,
PRIMARY KEY(id)
)";

$query = mysqli_query($con, $tbl_user);
if($query === TRUE) {
echo "<h3>Table USER created successfully</h3>";
} else {
echo "<h3>Table USER Not created</h3>";
}
mysqli_close($con);

?>
<p>Thank you! You have completed the installation</p>
<br>
<p><B>Kindly click on the button below for creating a user</B></p>
<br>
<button type="button" onclick="window.location.href='/password/register.php'">Create User<a></button>
</center>
</body>
</html>