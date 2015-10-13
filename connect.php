<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<html>
<head>
<title>SUCCESS SUBMISSION</title>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
<style>
header {
     background: #efefef;
	 padding: 10px 10px;
	 border-radius: 6px;
}

button
{
	display: block;
	font-size: 1.1em;
	font-weight: bold;
	text-transform: uppercase;
	padding: 5px 5px;
	margin: 10px auto;
	color: #CCC;
	background-color: #555;
	background: -webkit-linear-gradient(#888, #555);
	background: linear-gradient(#888, #555);
	border: 0 none;
	border-radius: 2px;
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
<h1>Your Submission Result</h1>
<h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>
</header>

<?php

define('DB_NAME', 'pwdinfo');
define('DB_USER', 'root');
define('DB_PASSWORD', 'summerof69');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
       die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$value = $_POST['web_name'];
$value2 = $_POST['web_link'];
$value3 = $_POST['user_name'];
$value4 = $_POST['pass_word'];
$value5 = $_POST['active'];
$value6 = $_POST['req_addr'];
$value7 = $_POST['mob_app'];
$value8 = $_POST['notes'];

$sql = "INSERT INTO password (web_name, web_link, user_name, pass_word, active, req_addr, mob_app, notes) VALUES ('$value', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7', '$value8')";

if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}else echo ('Your Submission is Successful');

mysql_close($link);

?>
<button type="button" onclick="window.location.href='form.php'">ADD MORE<a></button>
<button type="button" onclick="window.location.href='search_form.php'">Search Website Data<a></button>
</center>
</body>
</html>
<?php
}
?>



