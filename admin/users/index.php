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
        $sql = "select * from users";
        $result = mysqli_query($connect, $sql);
        ?>
        <div class="tables">
            <div class="products">
                <div class="cardHeaders">
                    <h2>NGƯỜI DÙNG</h2>
                    <a href="form_insert.php" class="btns">Thêm</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Stt</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Thông tin</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($result as $user) { ?>
                            <tr>
                                <td> <?php echo $i++ ?></td>
                                <td> <?php echo $user['name'] ?></td>
                                <td> <?php echo $user['email'] ?></td>
                                <td>
                                    <?php echo $user['address'] ?><br>
                                    <?php
                                    if ($user['gender'] == 0) echo 'Nam';
                                    else echo 'Nữ';
                                    ?><br>
                                    <?php echo $user['birth'] ?><br>
                                    <?php echo $user['phone'] ?>
                                </td>
                                <td><a href="delete.php?id=<?php echo $user['id'] ?>">X</a></td>
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