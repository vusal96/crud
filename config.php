<?php 

$host = "localhost";
$name = "root";
$password = "";
$db = "pairprogramming";

@$conn = mysqli_connect($host,$name,$password,$db);

if (!$conn) {
	echo "error config";
}

 ?>