<?php
require '../check_super_admin.php';
$id = $_GET['id'];
require '../connect.php';

$sql = "delete from users
where id = '$id'
";

mysqli_query($connect, $sql);

header('location:index.php?success=xoathanhcong');