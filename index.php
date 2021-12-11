<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<?php include 'menu.php' ?>
	<div class="w3-content w3-section" style="max-width:500px">
		<img class="mySlides" src="images/item-1.jpg" style="width:100%">
		<img class="mySlides" src="images/item-2.jpg" style="width:100%">
		<img class="mySlides" src="images/item-3.jpg" style="width:100%">
	</div>
	<?php include 'product.php' ?>
	<?php include 'footer.php'  ?>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>
</body>
</html>