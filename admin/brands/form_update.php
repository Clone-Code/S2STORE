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
        $sql = "select * from brands
        where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $brand = mysqli_fetch_array($result);
        ?>
        <div id="wrapper">

            <form action="process_update.php" method="POST" enctype="multipart/form-data" id="form">
                <h1 class="form-heading">SỬA THƯƠNG HIỆU</h1>

                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                Tên thương hiệu
                <input type="text" name="name" value="<?php echo $brand['name'] ?>">
                </div>
                <div class="form-group">
                Đổi ảnh mới
                <input type="file" name="image_new" value="image_new">
                </div>
                <div class="form-group">
                Hoặc giữ ảnh cũ
                <img src="image/<?php echo $brand['image'] ?>" alt="">
                <input type="hidden" name="image_old" value="<?php echo $brand['image'] ?>">
                </div>
                <button class="form-submit">sửa thương hiệu</button>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>