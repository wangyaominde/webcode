<?php
$servername = "localhost";
$username = "****";
$password = "*******";
$dbname = "****";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	 die("连接失败: " . mysqli_connect_error());
}
?>
