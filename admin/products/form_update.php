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
        
        $sql = 'select * from brands';
        $brands = mysqli_query($connect, $sql);
        $sql = 'select * from strap';
        $straps = mysqli_query($connect, $sql);
        $sql = 'select * from movement';
        $movements = mysqli_query($connect, $sql);
        ?>
        <div id="wrapper">
            <form action="process_update.php" method="POST" enctype="multipart/form-data" id="form">
                <h1 class="form-heading">SỬA SẢN PHẨM</h1>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    Tên sản phẩm
                    <input type="text" name="name" value="<?php echo $product['name'] ?>">
                </div>
                <div class="form-group">
                    Đổi ảnh mới
                    <input type="file" name="image_new" value="image_new">
                </div>
                <div class="form-group">
                    Hoặc giữ ảnh cũ
                    <img src="image/<?php echo $product['image'] ?>" alt="">
                    <input type="hidden" name="image_old" value="<?php echo $product['image'] ?>">
                </div>
                <div class="form-group">
                    Giới tính
                    <select name="gender" id="">
                        <option value="0">Nam</option>
                        <option value="1" <?php if ($product['gender'] == 1) { ?> selected <?php } ?>>Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    Thương hiệu
                    <select name="id_brand" id="">
                        <?php foreach ($brands as $brand) { ?>
                            <option value="<?php echo $brand['id'] ?>"
                            <?php if ($brand['id'] == $product['id_brand']) { ?> selected <?php } ?>
                            >
                                <?php echo $brand['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    Loại dây
                    <select name="id_strap" id="">
                        <?php foreach ($straps as $strap) { ?>
                            <option value="<?php echo $strap['id'] ?>"
                            <?php if ($strap['id'] == $product['id_strap']) { ?> selected <?php } ?>
                            >
                                <?php echo $strap['name'] ?>
                            </option>
                        <?php } ?>                   
                    </select>
                </div>
                <div class="form-group">
                    Kiểu máy
                    <select name="id_movement" id="">
                        <?php foreach ($movements as $movement) { ?>
                            <option value="<?php echo $movement['id'] ?>"
                            <?php if ($movement['id'] == $product['id_movement']) { ?> selected <?php } ?>
                            >
                                <?php echo $movement['name'] ?>
                            </option>
                        <?php } ?> 
                    </select>
                </div>
                <div class="form-group">
                    Giá
                    <input type="number" name="price" value="<?php echo $product['price'] ?>">
                </div>
                <div class="form-group">
                    Mô tả
                    <textarea name="description"><?php echo $product['description'] ?></textarea>
                </div>
                <button class="form-submit">sửa sản phẩm</button>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>