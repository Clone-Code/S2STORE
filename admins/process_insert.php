<?php
    if(empty($_POST['name'])) {
        header('location:form_insert.php?error=phaidienten');
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    require '../connect.php';
    $sql = "insert into admins(name, email, address, gender, birth, phone, password, role)
    values('$name', '$email', '$address', '$gender', '$birth', '$phone', '$password', '$role')";

    mysqli_query($connect, $sql);
    $error = mysqli_error($connect);
    echo $error;
    mysqli_close($connect);

    header('location:index.php');