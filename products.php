<?php 
require 'admin/connect.php';
$sql1 = "select * from products where type = 1 limit 4";
$result1 = mysqli_query($connection, $sql1);
$sql2 = "select * from products where type = 2";
$result2 = mysqli_query($connection, $sql2);
?>
<div class="mid">
	<h2>MEN'S BEST SELLERS</h2>
	<div style="text-align:center">
			<a href="type.php?type=1" style="text-align: center;">XEM TẤT CẢ...</a>
		</div>
	<div class="row">
		<?php foreach ($result1 as $each) { ?>
			<a class="item" href="product.php?id=<?php echo $each['id'] ?>">
				<div class="image" style="background-image: url(<?php echo $each['photo'] ?>);"></div>
				<p class="item_description"><?php echo $each['name'];?></p>
				<p class="item_description"><?php echo $each['price'];?></p>
			</a>
		<?php } ?>
	</div>
	<h2>WOMEN'S BEST SELLERS</h2>
	<div style="text-align:center">
			<a href="type.php?type=2" style="text-align: center;">XEM TẤT CẢ...</a>
		</div>
	<div class="row">
		<?php foreach ($result2 as $each2) { ?>
			<a class="item" href="product.php?id=<?php echo $each2['id'] ?>">
				<div class="image" style="background-image: url(<?php echo $each2['photo'] ?>);"></div>
				<p class="item_description"><?php echo $each2['name'];?></p>
				<p class="item_description"><?php echo $each2['price'];?></p>
			</a>
		<?php } ?>
	</div>
</div>