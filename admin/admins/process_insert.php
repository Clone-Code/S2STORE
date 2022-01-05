<?php
    require '../check_super_admin.php';
    require '../standardize_name.php';
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['birth']) 
    || empty($_POST['phone'])) {
        $_SESSION['error'] = "Phải điền đủ thông tin";
        header('location:form_insert.php');
        exit;
    }

    $name = standardize_name($_POST['name']);
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $time = strtotime($birth);
    $password = date("dmY", $time);
    $role = $_POST['role'];

    require '../connect.php';
    $sql = "select count(*) from admins where email = '$email'";
    $result = mysqli_query($connect, $sql);
    $number_row = mysqli_fetch_array($result)['count(*)'];

    if($number_row >= 1) {
        header('location:form_insert.php?error=Trùng email.');
        exit;
    }


    $sql = "insert into admins(name, email, address, gender, birth, phone, password, role)
    values('$name', '$email', '$address', '$gender', '$birth', '$phone', '$password', '$role')";

    mysqli_query($connect, $sql);
    $error = mysqli_error($connect);
    echo $error;
    mysqli_close($connect);

    header('location:index.php');