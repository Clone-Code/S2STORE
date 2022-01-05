<?php
$id = $_GET['id'];

require '../check_super_admin.php';
require '../connect.php';

$sql = "select birth from admins
        where id = '$id'";
$result = mysqli_query($connect, $sql);
$admin = mysqli_fetch_array($result);

$birth = $admin['birth'];
$time = strtotime($birth);
$password = date("dmY", $time);

$sql = "update admins
set
password = '$password'
where id = '$id'
";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
echo $error;
mysqli_close($connect);


header('location:index.php');
