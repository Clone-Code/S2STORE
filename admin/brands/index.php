<?php
require '../check_super_admin.php';
?>
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
        $sql = "select * from brands";
        $result = mysqli_query($connect, $sql);
        ?>
        <div class="tables">
            <div class="products">
                <div class="cardHeaders">
                    <h2>THƯƠNG HIỆU</h2>
                    <a href="form_insert.php" class="btns">Thêm</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Stt</td>
                            <td>Tên</td>
                            <td>Ảnh</td>
                            <td>Sửa</td>
                            <td>Xóa</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($result as $brand) { ?>
                            <tr>
                                <td> <?php echo $i++ ?></td>
                                <td> <?php echo $brand['name'] ?></td>
                                <td> <img src="image/<?php echo $brand['image'] ?>" height="100"> </td>
                                <td><a href="form_update.php?id=<?php echo $brand['id'] ?>">Sửa</a></td>
                                <td><a href="delete.php?id=<?php echo $brand['id'] ?>">X</a></td>
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