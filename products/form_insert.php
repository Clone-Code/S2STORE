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
    require '../connect.php';
    $sql = 'select * from brands';
    $result = mysqli_query($connect, $sql);
    ?>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        ten
        <input type="text" name="name">
        <br>
        anh
        <input type="file" name="image">
        <br>
        gioi tinh
        <select name="gender" id="">
            <option value="0">Nam</option>
            <option value="1">Nữ</option>
        </select>
        <br>
        thuong hieu
        <select name="id_brand" id="">
            <?php foreach($result as $brand) { ?>
                <option value="<?php echo $brand['id'] ?>">
                    <?php echo $brand['name'] ?>
                </option>
            <?php } ?>
        </select>
        <br>
        loai day
        <select name="id_strap" id="">
            <option value="0">day da</option>
            <option value="1">day cao su</option>
        </select>
        <br>
        bo may
        <select name="id_movement" id="">
            <option value="0">may co</option>
            <option value="1">may dien tu</option>
        </select>
        <br>
        gia 
        <input type="number" name="price">
        <br>
        mo ta
        <textarea name="description"></textarea>
        <br>
        <button>them</button>
    </form>
</body>
</html>