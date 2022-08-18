<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<body> 
<?php include('header.php'); ?>
<section>

<?php

include('dbcon.php');

$id=$_GET['product_id'];
$selectquery="select * from product where product_id=$id";
$query=mysqli_query($con,$selectquery);
$result=mysqli_fetch_assoc($query);
if(isset($_POST['submit'])){

	$id=$_GET['product_id'];

	$prdct_name=mysqli_real_escape_string($con,$_POST['product_name']);
	$prdct_size=mysqli_real_escape_string($con,$_POST['product_size']);
	$prdct_price=mysqli_real_escape_string($con,$_POST['product_price']);
	$prdct_image=mysqli_real_escape_string($con,$_POST['product_image']);
	$prdct_color=mysqli_real_escape_string($con,$_POST['product_color']);
	$prdct_description=mysqli_real_escape_string($con,$_POST['product_description']);

	$updatequery="update product set product_name='$prdct_name',product_size='$prdct_size',product_price='$prdct_price',product_image='$prdct_image',product_color='$prdct_color',product_description='$prdct_description' where product_id='$id' ";
	$query=mysqli_query($con,$updatequery);
	if($query){
		?>
		<?php
		header("location:product.php");
	}else{
		?>
		<script>
			alert('not updated');
		</script>
		<?php
	}
}
?>

	<form method="POST">
		<h2>Update Product</h2>
		<label>Product Name</label>
		<input type="text" name="product_name" placeholder="Update Product Name" autocomplete="off" value="<?php echo $result['product_name']; ?>" required>
		<label>Product Size</label>
		<input type="text" name="product_size" placeholder="Update Product Size" autocomplete="off" value="<?php echo $result['product_size']; ?>" required>
		<label>Product Price</label>
		<input type="text" name="product_price" placeholder="Update Product Price" autocomplete="off" value="<?php echo $result['product_price']; ?>" required>
		<label>Product Image</label>
		<input type="text" name="product_image" placeholder="Update Product Image" autocomplete="off" value="<?php echo $result['product_image']; ?>" required>
		<label>Product Color</label>
		<input type="text" name="product_color" placeholder="Update Product color" autocomplete="off" value="<?php echo $result['product_color']; ?>" required>
		<label>Product Description</label>
		<input type="text" name="product_description" placeholder="Update Product Description" autocomplete="off" value="<?php echo $result['product_description']; ?>" required>
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
	</section>

<?php

include('dbcon.php');
?>


<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>

</body>
</html>