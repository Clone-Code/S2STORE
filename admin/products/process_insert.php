<?php
    // if(empty($_POST['name'])) {
    //     header('location:form_insert.php?error=phaidienten');
    // }

    $name = $_POST['name'];
    $image = $_FILES['image'];
    $gender = $_POST['gender'];
    $id_brand = $_POST['id_brand'];
    $id_strap = $_POST['id_strap'];
    $id_movement = $_POST['id_movement'];
    $price = $_POST['price'];
    $description = $_POST['description'];


    $folder = 'image/';
    $file_extension = explode('.', $image['name'])[1];
    $file_name = time() . '.' .$file_extension;
    $path_file = $folder . $file_name;

    move_uploaded_file($image["tmp_name"], $path_file);


    require '../connect.php';
    $sql = "insert into products(name, image, gender, id_brand, id_strap, id_movement, price, description)
    values('$name', '$file_name', '$gender', '$id_brand', '$id_strap', '$id_movement', '$price', '$description')";

    mysqli_query($connect, $sql);
    $error = mysqli_error($connect);
    echo $error;
    mysqli_close($connect);

    header('location:index.php');