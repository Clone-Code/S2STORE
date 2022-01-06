<?php
    require '../check_super_admin.php';
    require '../standardize_name.php';

    $id = $_POST['id'];
    $name = standardize_name($_POST['name']);
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];


    require '../connect.php';

    $sql = "select count(*) from admins where email = '$email' and id != '$id'";
    $result = mysqli_query($connect, $sql);
    $number_row = mysqli_fetch_array($result)['count(*)'];

    if($number_row >= 1) {
        $_SESSION['error'] = "Trùng email";
        header("location:form_update.php?id=$id");
        exit;
    }

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

    $_SESSION['success'] = "Sửa thành công";
    header('location:index.php');