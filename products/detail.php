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
        $sql = "select products.*, brands.name as brand_name from products
        join brands on products.id_brand = brands.id
        where id = '$id'
        ";
        $result = mysqli_query($connect, $sql);
        $product = mysqli_fetch_array($result);
        ?>
        <h1><?php echo $product['name'] ?></h1>
        <br>
        anh
        <img src="image/<?php echo $product['image'] ?>" alt=>
        <br>
        hang
        <?php echo $product['brand_name'] ?>
        <br>
        gioi tinh
        <?php echo $product['gender'] ?>
        <br>
        bo may
        <?php echo $product['id_movement'] ?>
        <br>    

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>