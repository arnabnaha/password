<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:index.php");
} else {
?>
<?php 

$connection = mysql_connect('localhost','root','Your Password') or die ("Couldn't connect to server.");  
$db = mysql_select_db('pwdinfo', $connection) or die ("Couldn't select database.");  

$search=$_POST['search']; 
$sql="SELECT * FROM password WHERE web_name LIKE '%$search%'";
$result=mysql_query($sql); 
    
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd"> 
<html> 
<head> 
      <title>Website Search Result</title>
<style>

header {

     background: #efefef;
	 padding: 20px 10px;
	 border-radius: 6px;
	 
 }
 
 table, th, td {
 
 padding: 20px 10px;
 
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
  <th>Additional Info</th>
  <th>Date/Time Added</th>
  <th>Modify Info</th>
  <th>Delete Info</th>
</tr>

<?php

while($row=mysql_fetch_array($result)){

echo "<tr>";

echo "<td>".$row['web_name']."</td>";

echo "<td>".$row['web_link']."</td>";

echo "<td>".$row['user_name']."</td>";

echo "<td>".$row['pass_word']."</td>";

echo "<td>".$row['active']."</td>";

echo "<td>".$row['req_addr']."</td>";

echo "<td>".$row['notes']."</td>";

echo "<td>".$row['date']."</td>";

echo "<td>"."<a href=\"modify3.php?id=" . $row['id'] . "\">Modify Data</a></td>";

echo "<span> </span>";

echo "<td>"."<a href=\"delete.php?id=" . $row['id'] . "\">Delete Data</a></td>";

echo "<span> </span>";

echo "</tr>";

}//end while

?>
</table>

<p align=center><a href="https://www.aaa.com">Your Website Link</a></p>
<p align=center><button type="button" onclick="window.location.href='http://localhost/password/form.php'">ENTER NEW WEBSITE DATA<a></button></p>
<p align=center><button type="button" onclick="window.location.href='http://localhost/password/search_form.php'">Back<a></button></p>
<footer> 
<p align=center>All rights reserved @ Your name</p>
<p align=center>Contact: <a href="mailto: Your_Email@domain.com">Your_Email@domain.com</a></p>
</footer>
</center>
</body>
</html>
<?php
}
?>
