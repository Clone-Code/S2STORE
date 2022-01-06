<?php
    require '../check_super_admin.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image_new = $_FILES['image_new'];
    if($image_new['size'] > 0) {
        $folder = 'image/';
        $file_extension = explode('.', $image_new['name'])[1];
        $file_name = time() . '.' .$file_extension;
        $path_file = $folder . $file_name;
        echo $file_name;
        move_uploaded_file($image_new["tmp_name"], $path_file);
    } else {
        $file_name = $_POST['image_old'];
    }

    require '../connect.php';
    $sql = "update brands
    set
    name = '$name',
    image = '$file_name'
    where id = '$id'
    ";

    mysqli_query($connect, $sql);
    $error = mysqli_error($connect);
    echo $error;
    mysqli_close($connect);

    $_SESSION['success'] = "Sửa thành công";
    header('location:index.php');