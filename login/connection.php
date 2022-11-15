<?php

$dbhost = "localhost";
$dbname = "dbs";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $dbhost, username: $username, password: $password, database: $dbname);

// check error
if($mysqli->connect_errno)
{
	die("failed to connect database!");
}
return $mysqli
?>