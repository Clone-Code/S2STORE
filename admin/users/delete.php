<?php
require '../check_super_admin.php';
$id = $_GET['id'];
require '../connect.php';

$sql = "delete from users
where id = '$id'
";

mysqli_query($connect, $sql);

$_SESSION['success'] = "Xóa thành công";
header('location:index.php?success=xoathanhcong');