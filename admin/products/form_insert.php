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
                <?php foreach ($result as $brand) { ?>
                    <option value="<?php echo $brand['id'] ?>">
                        <?php echo $brand['name'] ?>
                    </option>
                <?php } ?>
            </select>
            <br>
            loai day
            <select name="id_strap" id="">
                <option value="0">Thép không gỉ</option>
                <option value="1">dây da</option>
                <option value="2">dây vải</option>
                <option value="3">dây cao su</option>
                <option value="4">dây nhựa</option>
            </select>
            <br>
            bo may
            <select name="id_movement" id="">
                <option value="0">Automatic</option>
                <option value="1">Năng lượng mặt trời</option>
                <option value="2">Lên cót tay</option>
                <option value="3">Kinetic</option>
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
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>