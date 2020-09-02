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

$con = mysqli_connect("localhost","root","");
if (!$con) {
die("can not connect: " . mysqli_error());
}
mysqli_select_db($con, "pwdinfo");

if( isset( $_GET['id']) )
{
     $id = $_GET['id'];
	 $sql= mysqli_query($con, "SELECT * FROM password WHERE id = '$id'");
	 $row= mysqli_fetch_array($sql);
}
if( isset($_POST['submit']) ) {
    
 $pw_update = "
  web_name               = '" . $_POST['web_name'] . "',
  web_link               = '" . $_POST['web_link'] . "',
  user_name              = '" . $_POST['user_name'] . "',
  pass_word              = '" . $_POST['pass_word'] . "',
  active                 = '" . $_POST['active'] . "',
  req_addr               = '" . $_POST['req_addr'] . "',
  mob_app               = '" . $_POST['mob_app'] . "',
  notes                  = '" . $_POST['notes'] . "'";
  
$id = $_POST['id'];  
$update = "UPDATE password SET $pw_update WHERE id = '$id'";
$result = mysqli_query($con, $update) or die(mysqli_error());
if($result) {
echo 'You have updated the record';
}else{
echo '<p> An error has occured</p>';
echo mysqli_error();
echo '<p>'.$query.'</p>';
}
}
?>

<form action="modify.php" method="post" />

<table width="400">

<tr><td><B>Website Name: </B></td><td> <input type="text" name="web_name" value="<?php echo $row['web_name']; ?>" /></td></tr>

<tr><td><B>Website Address: </B></td><td> <input type="text" name="web_link" value="<?php echo $row['web_link']; ?>" /></td></tr>

<tr><td><B>Username: </B></td><td> <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" /></td></tr>

<tr><td><B>Password: </B></td><td> <input type="text" name="pass_word" value="<?php echo $row['pass_word']; ?>" /></td></tr>

<tr><td><B>Account Active: </B></td><td> <input type="text" name="active" value="<?php echo $row['active']; ?>" /></td></tr>

<tr><td><B>Require Address: </B></td><td> <input type="text" name="req_addr" value="<?php echo $row['req_addr']; ?>" /></td></tr>

<tr><td><B>Mobile App: </B></td><td> <input type="text" name="mob_app" value="<?php echo $row['mob_app']; ?>" /></td></tr>

<tr><td><B>Additional Info: </B></td><td> <input type="textarea" name="notes" value="<?php echo $row['notes']; ?>" /></td></tr>

<tr><td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" /></td></tr>

</table>
<br><br>
<input type="submit" name="submit" value="Modify" />

<input type="reset" name="reset" value="Reset" />

<button type="button" onclick="window.location.href='form.php'">Add New Data<a></button>

<button type="button" onclick="window.location.href='search_form.php'">Search Account Info<a></button>

</form>
</center>
</body>
</html>