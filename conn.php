<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","123456","sqldb");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>