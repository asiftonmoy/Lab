<?php 
session_start();
error_reporting(1);

if(!mysql_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("lab");
 
if($_SESSION['admin']=="")
{
header('index.php');
}
 
?>
<h3 style="background:#795548;padding:20px;color:#FFFFFF;margin:0px">
	<span>Hello Admin !</span>
	<span style="float:right"><a onclick="return confirm('are you sure want to log out')" style="color:#FFFFFF" href="logout.php">Logout</a></span>
</h3>