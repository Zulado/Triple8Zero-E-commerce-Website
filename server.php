<?php
//database setting

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "triple8zero";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
	die("Connection Failed. ". mysqli_connect_error());
}
?>