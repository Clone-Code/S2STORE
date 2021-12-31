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
        <div id="wrapper">
            <form action="process_insert.php" method="POST" enctype="multipart/form-data" id="form">
                <h1 class="form-heading">THÊM THƯƠNG HIỆU</h1>
                <div class="form-group">
                    Tên thương hiệu
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    Ảnh
                    <input type="file" name="image">
                </div>
                <button class="form-submit">thêm thương hiệu</button>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>