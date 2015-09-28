<html>
<head>
<title>Website Record Update</title>
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
<h1>WEBSITE RECORD UPDATE</h1>
</header>
<?php

$con = mysql_connect("localhost","root","Your Password");
if (!$con) {
die("can not connect: " . mysql_error());
}
mysql_select_db("pwdinfo",$con);
?>

<?php
if($_POST['submit'] == 1) {

$update = "UPDATE password SET web_name = '$_POST[web_name]', web_link = '$_POST[web_link]', user_name = '$_POST[user_name]', pass_word = '$_POST[pass_word]', active='$_POST[active]', req_addr = $_POST[req_addr], notes = $_POST[notes] WHERE id = $_POST[id]";
$result = mysql_query($update) or die(mysql_error());

if($result) {
echo 'You have updated the record';
}else{
echo '<p> An error has occured</p>';
echo mysql_error();
echo '<p>'.$query.'</p>';
    }
 }
?>

<?php
if($_GET['id']) {

$sql = "SELECT * FROM password WHERE id = $_GET[id] LIMIT 1";
$result = mysql_query($sql,$con) or die(mysql_error());
$row = mysql_fetch_array($result);

?>

<form action="modify3.php" method="post" />

<table width="400">

<tr><td><B>Website Name: </B></td><td> <input type="text" name="web_name" value="<?php echo $row['web_name']; ?>" /></td></tr>

<tr><td><B>Website Address: </B></td><td> <input type="text" name="web_link" value="<?php echo $row['web_link']; ?>" /></td></tr>

<tr><td><B>Username: </B></td><td> <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" /></td></tr>

<tr><td><B>Password: </B></td><td> <input type="text" name="pass_word" value="<?php echo $row['pass_word']; ?>" /></td></tr>

<tr><td><B>Account Active: </B></td><td> <input type="checkbox" name="active" value="<?php echo $row['active']; ?>" /></td></tr>

<tr><td><B>Require Address: </B></td><td> <input type="checkbox" name="req_addr" value="<?php echo $row['req_addr']; ?>" /></td></tr>

<tr><td><B>Additional Info: </B></td><td> <input type="textarea" name="notes" value="<?php echo $row['notes']; ?>" /></td></tr>

<tr><td><input type="submit" name="submit" value="Modify" /></td></tr>

<tr><td><input type="reset" name="reset" value="Reset" /></td></tr>

<tr><td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" /></td></tr>

</table>
</form>
</center>

<?php
}
?>

</body>
</html>