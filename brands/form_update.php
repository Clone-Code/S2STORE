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
    $sql = "select * from brands
    where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $brand = mysqli_fetch_array($result);
    ?>
    <form action="process_update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id?>">
        ten 
        <input type="text" name="name" value="<?php echo $brand['name']?>">
        <br>
        doi anh moi 
        <input type="file" name="image_new" value="image_new">
        <br>
        hoac giu anh cu
        <img src="image/<?php echo $brand['image']?>" alt="">
        <input type="hidden" name="image_old" value="<?php echo $brand['image'] ?>">
        <br>
        <button>sua</button>
    </form>
</body>
</html>