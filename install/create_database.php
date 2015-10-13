<html>
<head>
<title>CREATE DATABASE</title>
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
<h1>DATABASE CREATION</h1>
</header>
<?php
$con = mysql_connect("localhost","root","summerof69");
if (!$con) {
die ("Cannot Connect to the server: " . mysql_error());
}

if (mysql_query("CREATE DATABASE pwdinfo",$con)) {
echo "The Database was created Successfully";
} else echo "Error: " . mysql_error();

mysql_close($con);

?>
<button type="button" onclick="window.location.href='create_table.php'">Create Tables<a></button>
</center>
</body>
</html>