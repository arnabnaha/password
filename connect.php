<html>
<head>
<title>SUCCESS SUBMISSION</title>
<style>
header {
     background: #efefef;
	 padding: 10px 10px;
	 border-radius: 6px;
}
</style>
</head>
<body>
<center>
<header>
<h2>Your Submission Result</h2>
</header>

<?php

define('DB_NAME', 'pwdinfo');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Yout password');
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
$value7 = $_POST['notes'];

$sql = "INSERT INTO password (web_name, web_link, user_name, pass_word, active, req_addr, notes) VALUES ('$value', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7')";

if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}else echo ('Your Submission is Successful');

mysql_close($link);

?>
<p><a href="http://localhost/password/form.php">ADD MORE</a></p>
</center>
</body>
</html>
