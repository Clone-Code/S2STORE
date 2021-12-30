<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
include 'connect.php';
$search = '';

if(isset($_GET['search'])) {
	$search = $_GET['search'];
}

$trang = 1;

if(isset($_GET['trang'])) {
	$trang = $_GET['trang'];
} 
$query_product = "select count(*) where products like '%$search%'";
$allproduct = mysqli_query($connection, $query_product);
$result_all = mysqli_fetch_array($allproduct);
$number_product = $result_all['count(*)'];
$number_product_per_page = 10;
$number_page = ceil($number_product / $number_product_per_page);
$bo_qua = $number_product_per_page*($trang - 1);

$sql = "select * from products where products '%$search%' limit $number_product_per_page offset $bo_qua";

$result = mysqli_query($connection,$sql);
?>
	<h1>
		Trang chủ
	</h1>

	<table border="1" width="100%">
		<caption>
			<form>
				<input type="search" name="search" value="<?php echo $search ?>">
			</form>
		</caption>
		<tr>
			<th>Mã</th>
			<th>Tiêu đề</th>
			<th>Ảnh</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
		<?php foreach($result as $product) { ?>
			<tr>
				<td><?php echo $product['id'] ?></td>
				<td>
					<a href="detail.php?ma=<?php echo $product['id'] ?>">
						<?php echo $product['name'] ?>
					</a>
				</td>
				<td>
					<img src="<?php echo $product['photo'] ?>" height='100'>
				</td>
				<td>
					<a href="update.php?ma=<?php echo $product['id'] ?>">
						Sửa
					</a>
				</td>
				<td>
					<a href="delete.php?ma=<?php echo $product['id'] ?>">
						Xóa
					</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	<?php for($i=1; $i <= $number_page; $i++) {?>
		<a href="?trang= <?php echo $i ?>&search=<?php echo $search ?>">
			<?php echo $i ?>
		</a>
	<?php } ?>
<?php mysqli_close($connection) ?>
</body>
</html>