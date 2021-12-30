<?php 
$ma = $_POST['ma'];
$tie_de = $_POST['tie_de'];
$noi_dung = $_POST['noi_dung'];
$anh = $_POST['anh'];

include 'connect.php';

$truy_van = "update tin_tuc
set 
tie_de = '$tie_de'
noi_dung = '$noi_dung'
anh = '$anh'
where
ma = '$ma'";

mysqli_query($conn, $truy_van);
mysqli_close($conn);
?>