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
    require '../sidebar.php';
    ?>
    <div class="main">
        <?php
        require '../topbar.php';
        ?>
        <?php
        require '../connect.php';
        $sql = 'select * from brands';
        $sql1 = 'select * from strap';
        $sql2 = 'select * from movement';
        $result = mysqli_query($connect, $sql);
        $result1 = mysqli_query($connect, $sql1);
        $result2 = mysqli_query($connect, $sql2);
        ?>
        <div id="wrapper">
            <form action="process_insert.php" method="POST" enctype="multipart/form-data" id="form">
                <h1 class="form-heading">THÊM SẢN PHẨM</h1>
                <div class="form-group">
                    Tên sản phẩm
                    <input type="text" name="name" >
                </div>
                <div class="form-group">
                    Ảnh
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    Giới tính
                    <select name="gender" id="">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    Thương hiệu
                    <select name="id_brand" id="">
                        <?php foreach ($result as $brand) { ?>
                            <option value="<?php echo $brand['id'] ?>">
                                <?php echo $brand['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    Loại dây
                    <select name="id_strap" id="">
                    <?php foreach ($result1 as $strap) { ?>
                            <option value="<?php echo $strap['id'] ?>">
                                <?php echo $strap['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    Kiểu máy
                    <select name="id_movement" id="">
                    <?php foreach ($result2 as $movement) { ?>
                            <option value="<?php echo $movement['id'] ?>">
                                <?php echo $movement['name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    Giá
                    <input type="number" name="price">
                </div>
                <div class="form-group">
                    Mô tả
                    <textarea name="description"></textarea>
                </div>
                <button class="form-submit">thêm sản phẩm</button>
            </form>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>