<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "test";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

if ($conn -> connect_errno) {
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
}