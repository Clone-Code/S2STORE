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
        <?php if (isset($_GET['error'])) {
            echo $_GET['error'];
        } ?>
        <div id="wrapper">
            <form action="process_insert.php" method="POST" enctype="multipart/form-data" id="form">
                <h1 class="form-heading">THÊM NHÂN VIÊN</h1>
                <div class="form-group">
                    Tên
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    Email
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    Địa chỉ
                    <input type="text" name="address">
                </div>
                <div class="form-group">
                    Giới tính
                    <select name="gender" id="">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
                <div class="form-group">
                    Ngày sinh
                    <input type="date" name="birth">
                </div>
                <div class="form-group">
                    Số điện thoại
                    <input type="text" name="phone">
                </div>
                <div class="form-group">
                    Chức vụ
                    <select name="role" id="">
                        <option value="0">Nhân viên</option>
                        <option value="1">Quản lý</option>
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