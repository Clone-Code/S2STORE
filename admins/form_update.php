<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET['id'];

    require '../connect.php';
    $sql = "select * from admins
    where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $admin = mysqli_fetch_array($result);
    ?>
    <form action="process_update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id?>">
        ten
        <input type="text" name="name" value="<?php echo $admin['name']?>">
        <br>
        email
        <input type="text" name="email" value="<?php echo $admin['email']?>">
        <br>        
        dia chi
        <input type="text" name="address" value="<?php echo $admin['address']?>">
        <br>
        gioi tinh
        <select name="gender" id="">
            <option value="0">Nam</option>
            <option value="1"
            <?php if($admin['gender'] == 1 ) {?>
                selected
            <?php } ?>
            >Nữ</option>
        </select>
        <br>
        ngay sinh
        <input type="date" name="birth" value="<?php echo $admin['birth']?>">
        <br>
        so dien thoai
        <input type="text" name="phone" value="<?php echo $admin['phone']?>">
        <br>
        mat khau
        <input type="password" name="password">
        <br>
        chuc vu
        <select name="role" id="">
            <option value="0">Nhân viên</option>
            <option value="1"
            <?php if($admin['role'] == 1 ) {?>
                selected
            <?php } ?>
            >Quản lý</option>
        </select>
        <br>
        <button>them</button>
    </form>
</body>
</html>