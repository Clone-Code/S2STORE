<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
$ma = $_GET['ma'];

require 'connect.php'

$sql = "select * from tin_tuc where ma = $ma";
$result = mysqli_query($connection,$sql);
$bai_tin_tuc = mysqli_fetch_array($result);
?>
<h1>
	<?php echo $bai_tin_tuc['tieu_de']?>
</h1>
<p>
	<?php echo nl2br($bai_tin_tuc['noi_dung']) ?>
</p>
</body>
</html>