<?php
require '../check_super_admin.php';
$id = $_GET['id'];
require '../connect.php';

$sql = "delete from admins
where id = '$id'
";

mysqli_query($connect, $sql);
$error  = mysqli_error($connect);
mysqli_close($connect);

$_SESSION['success'] = "Xóa thành công";
header('location:index.php');