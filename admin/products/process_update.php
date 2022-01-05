<?php
    require '../check_admin.php';
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
    $gender = $_POST['gender'];
    $id_brand = $_POST['id_brand'];
    $id_strap = $_POST['id_strap'];
    $id_movement = $_POST['id_movement'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    require '../connect.php';
    $sql = "update products
    set
    name = '$name',
    image = '$file_name',
    gender = '$gender',
    id_brand = '$id_brand',
    id_strap = '$id_strap',
    id_movement = '$id_movement',
    price = '$price',
    description = '$description'
    where id = '$id'
    ";

    mysqli_query($connect, $sql);
    $error = mysqli_error($connect);
    echo $error;
    mysqli_close($connect);

    header('location:index.php');