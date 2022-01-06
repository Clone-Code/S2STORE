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
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        require '../connect.php';
        $sql = "select * from admins
        where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $admin = mysqli_fetch_array($result);
        ?>
        <div id="wrapper">
            <form action="process_update.php" method="POST" enctype="multipart/form-data" id="form">
                <h1 class="form-heading">SỬA NHÂN VIÊN</h1>

                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                    Tên
                    <input type="text" name="name" value="<?php echo $admin['name'] ?>">
                </div>
                <div class="form-group">
                    Email
                    <input type="text" name="email" value="<?php echo $admin['email'] ?>">
                </div>
                <div class="form-group">
                    Địa chỉ
                    <input type="text" name="address" value="<?php echo $admin['address'] ?>">
                </div>
                <div class="form-group">
                    Giới tính
                    <select name="gender" id="">
                        <option value="0">Nam</option>
                        <option value="1" <?php if ($admin['gender'] == 1) { ?> selected <?php } ?>>Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    Ngày sinh
                    <input type="date" name="birth" value="<?php echo $admin['birth'] ?>">
                </div>
                <div class="form-group">
                    Số điện thoại
                    <input type="text" name="phone" value="<?php echo $admin['phone'] ?>">
                </div>
                <div class="form-group">
                    Chức vụ
                    <select name="role" id="">
                        <option value="0">Nhân viên</option>
                        <option value="1" <?php if ($admin['role'] == 1) { ?> selected <?php } ?>>Quản lý</option>
                    </select>
                </div>
                <button class="form-submit">thêm nhân viên</button>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>