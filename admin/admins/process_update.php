<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];


    require '../connect.php';

    $sql = "update admins
    set
    name = '$name',
    email = '$email',
    address = '$address',
    gender = '$gender',
    birth = '$birth',
    phone = '$phone',
    role = '$role'
    where id = '$id'
    ";

    mysqli_query($connect, $sql);
    $error = mysqli_error($connect);
    echo $error;
    mysqli_close($connect);

    
    header('location:index.php');