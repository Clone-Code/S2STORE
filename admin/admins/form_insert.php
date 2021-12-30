<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        ten
        <input type="text" name="name">
        <br>
        email
        <input type="text" name="email">
        <br>
        dia chi
        <input type="text" name="address">
        <br>
        gioi tinh
        <select name="gender" id="">
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
        </select>
        <br>
        ngay sinh
        <input type="date" name="birth">
        <br>
        so dien thoai
        <input type="text" name="phone">
        <br>
        mat khau
        <input type="password" name="password">
        <br>
        chuc vu
        <select name="role" id="">
            <option value="0">Nhân viên</option>
            <option value="1">Quản lý</option>
        </select>
        <br>
        <button>them</button>
    </form>
</body>
</html>