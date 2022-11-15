<?php

$dbhost = "localhost";
$dbname = "dbs";
$username = "root";
$password = "";

$conn = mysqli_connect($dbhost,$username,$password,$dbname);

// check error
if(!$conn)
{
	die("failed to connect database!");
}
return $conn
?>