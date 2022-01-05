<?php
    require '../check_super_admin.php';
    if(empty($_POST['name']) || empty($_POST['image'])) {
        $_SESSION['error'] = "Phải điền đầy đủ thông tin";
        header('location:form_insert.php');
        exit;
    }

    $name = $_POST['name'];
    $image = $_FILES['image'];

    $folder = 'image/';
    $file_extension = explode('.', $image['name'])[1];
    $file_name = time() . '.' .$file_extension;
    $path_file = $folder . $file_name;

    move_uploaded_file($image["tmp_name"], $path_file);

    require '../connect.php';
    $sql = "insert into brands(name, image)
    values('$name', '$file_name')";

    mysqli_query($connect, $sql);
    $error = mysqli_error($connect);
    echo $error;
    mysqli_close($connect);

    header('location:index.php');