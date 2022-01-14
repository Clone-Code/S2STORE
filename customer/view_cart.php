<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		.cart-container{
			top:  40%;
			left: 50%;
			transform: translate(-50%, -50%);
			height: auto;
			width: 60%;
			background-color: #ffffff;
			border-radius: 20px;
			box-shadow: 0px 25px 40px #1687d933;
			position: relative;
		}
		.Header{
			margin: auto;
			width: 90%;
			height: 15%;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		.Heading{
			font-size: 20px;
			font-family: ‘Open Sans’;
			font-weight: 700;
			color: #2F3841;
		}
		.Action{
			font-size: 14px;
			font-family: ‘Open Sans’;
			font-weight: 600;
			color: #E44C4C;
			cursor: pointer;
			border-bottom: 1px solid #E44C4C;
		}
		.cart-items{
			margin: auto;
			width: 90%;
			height: 30%;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		.image-box{
			width: 15%;
			text-align: center;
		}
		.about{
			height: 30%;
			width: 200px;
		}
		.title{
			padding-top: 5px;
			line-height: 10px;
			font-size: 22px;
			font-family: ‘Open Sans’;
			font-weight: 800;
			color: #202020;
		}
		.counter{
			width: 15%;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		.btn{
			width: 40px;
			height: 40px;
			border-radius: 50%;
			background-color: #d9d9d9;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 20px;
			font-family: ‘Open Sans’;
			font-weight: 900;
			color: #202020;
			cursor: pointer;
		}
		.count{
			font-size: 20px;
			font-family: ‘Open Sans’;
			font-weight: 900;
			color: #202020;
		}
		.prices{
			height: 100%;
			text-align: right;
		}
		.amount{
			padding-top: 20px;
			font-size: 26px;
			font-family: ‘Open Sans’;
			font-weight: 800;
			color: #202020;
		}
		.remove{
			padding-top: 5px;
			font-size: 14px;
			font-family: ‘Open Sans’;
			font-weight: 600;
			color: #E44C4C;
			cursor: pointer;
		}
		hr{
			width: 66%;
			float: right;
			margin-right: 5%;
		}
		.checkout{
			float: right;
			margin-right: 5%;
			width: 28%;
			margin-bottom: 50px;
		}
		.total{
			width: 100%;
			display: flex;
			justify-content: space-between;
		}
		.Subtotal{
			font-size: 22px;
			font-family: ‘Open Sans’;
			font-weight: 700;
			color: #202020;
		}
		.total-amount{
			font-size: 36px;
			font-family: ‘Open Sans’;
			font-weight: 900;
			color: #202020;
		}
		.button{
			width: 100%;
			height: 40px;
			border: none;
			padding: 7px 0;
			background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
			border-radius: 20px;
			cursor: pointer;
			font-size: 16px;
			font-family: ‘Open Sans’;
			font-weight: 600;
			color: #202020;
		}
		.emty_cart {
			margin-left: 50%;
			justify-content: center;
			text-align: center;
			text-size-adjust: 100%;
			width: 670px;
		}
		.emty_cart a{
			margin-top: 32px;
			cursor: pointer;
			padding: 22px 0;
			background-color: #53c66e;
			border-radius: 7px;
			height: 58px;
			width: 200px;
			border: none;
			font-weight: 700;
			font-size: 14px;
			line-height: 14px;
			letter-spacing: -.02em;
			color: #f8f7f4;
			text-align: center;
		}
	</style>
	<title></title>
</head>
<body>
	<?php
	session_start(); 
	if(empty($_SESSION['cart'])) { ?>
		<div class="emty_cart">
			<img height="100" src="images/logo1.png">
			<p class="title">Giỏ hàng của bạn đang trống.</p>
			<a href="./index.php" type="button">
				<span>TIẾP TỤC MUA SẮM</span>
			</a>
		</div>
	<?php } 
	else {
		$cart = $_SESSION['cart'];
		$total = 0;
		?>	
		<div class="cart-container">
			<!-- header session -->
			<div class="Header">
				<h3 class="Heading">Đơn hàng</h3>
				<a href="index.php"><img height="100" src="images/logo1.png"></a>
				<h5 class="Action">Xóa toàn bộ</h5>
			</div>
			<!-- detail session -->
			<?php foreach ($cart as $id => $each): ?>
				<div class="cart-items">
					<div class="image-box">
						<img height="100" src="<?php echo $each['photo'] ?>">
					</div>
					<div class="about">
						<p class="title"><?php echo $each['name'] ?></p>
					</div>
					<div class="counter">
						<div class=”btn”><a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decrease">-</a></div>
						<div class=”count”><?php echo $each['quantity'] ?></div>
						<div class=”btn”><a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=increase">+</a></div>
					</div>
					<div class="price">
						<div class=”amount”><?php echo $each['quantity'] * $each['price']?></div>
					</div>
					<div class=”remove”><a href="delete_from_cart.php?id=<?php echo $id ?>">Xóa</a></div>
				</div>
			<?php 
			$total = $total + $each['quantity'] * $each['price'];
		endforeach ?>
			<hr> 
			<div class="checkout">
				<div class="total">
					<div class="Subtotal">Tổng tiền:</div>
					<div class="total-amount"><?php echo '$'.number_format($total)?></div>
				</div>
				<a href="./checkout.php" type="button" class="button">
					<span>Thánh toán</span>
				</a>
			</div>
		</div>
	<?php } ?>
</body>
</html>

