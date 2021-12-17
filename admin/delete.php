<?php 
$ma = $_GET['ma'];

require 'connect.php';

$truy_van = "delete from tin_tuc where ma =$ma";

mysqli_query($conn,$truy_van);
mysqli_close($conn);
 ?>