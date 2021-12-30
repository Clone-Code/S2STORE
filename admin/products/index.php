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
<?php require '../sidebar.php' ?>
    <div class="main">
        <?php
        require '../topbar.php';
        ?>
        <?php
        require '../connect.php';
        $sql = "select products.*, brands.name as brand_name from products
        join brands on products.id_brand = brands.id
        ";
        $result = mysqli_query($connect, $sql);
        ?>
        <div class="tables">
            <div class="products">
                <div class="cardHeaders">
                    <h2>SẢN PHẨM</h2>
                    <a href="form_insert.php" class="btns">Thêm</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Thông tin</th>
                            <th>Thương hiệu</th>
                            <th>Xem</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($result as $product) { ?>
                            <tr>
                                <td> <?php echo $i++ ?></td>
                                <td> <?php echo $product['name'] ?></td>
                                <td> 
                                    <img src="image/<?php echo $product['image'] ?>">
                                </td>
                                <td>
                                    <?php
                                    if ($product['gender'] == 0) echo 'Nam';
                                    else echo 'Nữ';
                                    ?><br>
                                    <?php echo $product['id_strap'] ?> <br>
                                    <?php echo $product['id_movement'] ?>
                                </td>
                                <td><?php echo $product['brand_name'] ?></td>
                                <td><a href="detail.php?id=<?php echo $product['id'] ?>">Xem</a></td>
                                <td><a href="form_update.php?id=<?php echo $product['id'] ?>">Sửa</a></td>
                                <td><a href="delete.php?id=<?php echo $product['id'] ?>">X</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>