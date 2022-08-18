<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewpoint" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/products.css">

</head>
<body>

<?php include('header.php'); ?>

<br><br><br><br><br><br><br><br><br>



<h1 style="font-family:cursive;" class="title">&nbsp; &nbsp; Women's wear</h1>

<?php  

include('dbcon.php');

$query="SELECT * FROM `product` WHERE `cate_id` =2";

//$query="select `product_name`,`product_price`,`product_size`,`product_image`,`product_color`,`product_description` from `product` order by `product_id` asc";

$firequery=mysqli_query($con,$query);

$num=mysqli_num_rows($firequery);

if($num>0){
	while($product=mysqli_fetch_array($firequery)){
		
		?>
		<div class="products">
		<div class="containor">
			<!--<h1 style="font-family:cursive;" class="title">&nbsp &nbsp Men's wear</h1>-->
			<div class="product-items">
		
		<!-- single product -->

				<form action="manage_cart.php" method="POST">
				<div class="product">
					<div class="product-content">
						<div class="product-img">
							<img src="Admin/img/<?php echo $product['product_image']; ?>" alt="product image" />
						</div>
						<div class="product-btns">
							<button type="submit" class="btn-cart" name="cart_btn" style="font-family:cursive;">add to cart
							</button>
							<button type="submit" class="btn-buy" name="buy_btn" style="font-family:cursive;">buy now
							</button>
							
						</div>
					</div>

					<div class="product-info">
						<div class="product-info-top">
							
						</div>

						<h5 class="product-name" style="font-family:cursive; color: red;"><?php echo $product['product_name']; ?></h5>
						<p class="product-price" style="font-family:cursive;"><?php echo $product['product_price']; ?></p>
						<input type="hidden" name="Item_Name" value="<?php echo $product['product_name']; ?>">
						<input type="hidden" name="Price" value="<?php echo $product['product_price']; ?>">
						<input type="hidden" name="product_color" value="<?php echo $product['product_color']; ?>">
						<input type="hidden" name="product_size" value="<?php echo $product['product_size']; ?>">
						<input type="hidden" name="product_description" value="<?php echo $product['product_description']; ?>">
						<br>
						<br>
						Color: &nbsp;<b><span><?php echo $product['product_color']; ?></span></b>
						&nbsp;&nbsp;
						<span>Size: &nbsp;<b><span><?php echo $product['product_size']; ?></span></b></span>
						<br><br>
						<h5>Description: <?php echo $product['product_description']; ?></h5>
					</div>
				</div>
				</form>
		<!--end single product -->
		</div>
	</div>
</div>
<?php
	}
}
?>



<!---------end Product ---------->
<?php include('footer.php'); ?>

</body>
</html>