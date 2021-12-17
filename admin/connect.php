<?php 
// $servername = "localhost";
// $dbname = "s2store";
// $username = "root";
// $password = "";

//create connection
$connection = mysqli_connect('localhost', 'root','', 's2store');
mysqli_set_charset($connection, 'utf8');
//check connection
if (!$connection) {
	die("Connection failed: " . mysqli_connect_error());
}
// echo "Connect successfully";
?>