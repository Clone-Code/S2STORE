<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <?php
    $id = $_GET['id'];
    require '../sidebar.php';
    ?>
    <div class="main">
        <?php
        require '../topbar.php';
        ?>

        <?php
        require '../connect.php';
        $sql = "select products.*, brands.name as brand_name, strap.name as strap_name, movement.name as movement_name
        from products
        join brands on products.id_brand = brands.id
        join strap on products.id_strap = strap.id
        join movement on products.id_movement = movement.id
        where products.id = '$id'
        ";
        $result = mysqli_query($connect, $sql);
        $product = mysqli_fetch_array($result);
        // $error = mysqli_error($connect);
        // echo $error;
        ?>
        <h1><?php echo $product['name'] ?></h1>
        <br>
        Ảnh
        <img src="image/<?php echo $product['image'] ?>">
        <br>
        Thương hiệu
        <?php echo $product['brand_name'] ?>
        <br>
        Giới tính
        <?php
        if ($product['gender'] == 0) echo 'Nam';
        else echo 'Nữ';
        ?><br>
        Loại dây

        <?php 
        echo $product['strap_name'];
        ?> <br>
        Kiểu máy
        <?php
        echo $product['movement_name'];
        ?> <br>
        Mô tả
        <?php echo $product['description'] ?>
        <?php mysqli_close($connect); ?>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>