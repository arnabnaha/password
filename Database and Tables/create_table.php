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
$con = mysql_connect("localhost","root","Your password");
if (!$con) {
die ("Cannot Connect to the server: " . mysql_error());
}

mysql_select_db("pwdinfo",$con);

$tbl_password = "CREATE TABLE IF NOT EXISTS password (
id INT(11) NOT NULL AUTO_INCREMENT,
web_name VARCHAR(255) NOT NULL,
web_link VARCHAR(255) NOT NULL,
user_name VARCHAR(255) NOT NULL,
pass_word VARCHAR(255) NOT NULL,
active BIT(1) NULL,
req_addr BIT(1) NULL,
notes VARCHAR(255) NULL,
date timestamp,
PRIMARY KEY(id)
)";

$query = mysql_query($tbl_password);
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

$query = mysql_query($tbl_user);
if($query === TRUE) {
echo "<h3>Table USER created successfully</h3>";
} else {
echo "<h3>Table USER Not created</h3>";
}
mysql_close($con);

?>
</center>
</body>
</html>