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
$con = mysqli_connect("localhost","root","");
if (!$con) {
die ("Cannot Connect to the server: " . mysqli_error());
}

if (mysqli_query($con, "CREATE DATABASE pwdinfo")) {
echo "The Database was created Successfully";
} else echo "Error: " . mysqli_error();

mysqli_close($con);

?>
<button type="button" onclick="window.location.href='create_table.php'">Create Tables<a></button>
</center>
</body>
</html>