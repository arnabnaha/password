<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<?php 

$connection = mysqli_connect('localhost','root','') or die ("Couldn't connect to server.");  
$db = mysqli_select_db($connection, 'pwdinfo') or die ("Couldn't select database.");  

$search=$_POST['search']; 
$sql="SELECT * FROM password WHERE web_name LIKE '%$search%'";
$result=mysqli_query($connection, $sql); 
    
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
      <title>Website Search Result</title>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">
<style>

header {

     background: #efefef;
	 padding: 20px 10px;
	 border-radius: 6px;
	 
 }
 
 table, th, td {
 
 padding: 20px 10px;
 
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
<h1 align="center">WEBSITE ACCOUNT SEARCH RESULT</h1>
<h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>
</header>

<!-- form to display record from database -->

<table align="center" width="950" border="1" cellpadding="1" cellspacing="1">

<tr>
  <th>Name of Account</th>
  <th>Website Address</th>
  <th>Username</th>
  <th>Password</th>
  <th>Active</th>
  <th>Requires Address</th>
  <th>Mobile App</th>
  <th>Additional Info</th>
  <th>Date/Time Added</th>
  <th>Modify Link</th>
  <th>Delete Link</th>
</tr>

<?php

while($row=mysqli_fetch_array($result)){

echo "<tr>";

echo "<td>".$row['web_name']."</td>";

echo "<td>".$row['web_link']."</td>";

echo "<td>".$row['user_name']."</td>";

echo "<td>".$row['pass_word']."</td>";

echo "<td>".$row['active']."</td>";

echo "<td>".$row['req_addr']."</td>";

echo "<td>".$row['mob_app']."</td>";

echo "<td>".$row['notes']."</td>";

echo "<td>".$row['date']."</td>";

echo "<td>"."<a href=\"modify.php?id=" . $row['id'] . "\">Modify Data</a></td>";

echo "<span> </span>";

echo "<td>"."<a href=\"delete.php?id=" . $row['id'] . "\">Delete Data</a></td>";

echo "<span> </span>";

echo "</tr>";

}//end while

?>
</table>

<button type="button" onclick="window.location.href='https://nahahealthclinic.org'">CLINIC WEBSITE<a></button>
<button type="button" onclick="window.location.href='form.php'">ENTER NEW WEBSITE DATA<a></button>
<button type="button" onclick="window.location.href='search_form.php'">Back<a></button>
</center>
</body>
<footer> 
<p align=center>All rights reserved @ Naha Health Clinic</p>
<p align=center>Contact: <a href="mailto: contactus@nahahealthclinic.com">contactus@nahahealthclinic.com</a></p>
</footer>
</html>
<?php
}
?>