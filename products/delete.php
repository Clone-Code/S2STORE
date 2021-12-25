<?php
$id = $_GET['id'];
require '../connect.php';

$sql = "delete from products
where id = '$id'
";

mysqli_query($connect, $sql);

header('location:index.php?success=xoathanhcong');