<?php
require '../check_super_admin.php';
$id = $_GET['id'];
require '../connect.php';

$sql = "delete from products
where id = '$id'
";

mysqli_query($connect, $sql);

$_SESSION['success'] = "Xóa thành công";
header('location:index.php');