<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/feddback.css">
</head>
<body>

<?php include('header.php'); ?>

<?php

include('dbcon.php');

$mt=($_SESSION['product'][0]);
$result = $_SESSION['product'][0];

$result['Item_Name'];

?>

<?php 
if(isset($_POST['submit']))
{
	$name=$_POST['buyer_name'];
	$pname=$_POST['product_name'];
	$qty=$_POST['order_qty'];
	$price=$_POST['order_price'];
	$date=$_POST['order_date'];
  	$payment_type=$_POST['payment_type'];
  
 	$insertquery="insert into `order`(buyer_name,product_name,order_qty,order_price,order_date,payment_type) values('$name','$pname','$qty','$price','$date','$payment_type')";
	$iquery=mysqli_query($con,$insertquery);
	if($iquery)
	{
  	header("location:confirmorder.php");
  	exit; 
	}
}
$dt = date('d/m/Y');
?>


	<section>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<br>
		<h2>Order Now</h2>
		<label>Buyer Name</label>
		<input type="text" name="buyer_name" placeholder="Buyer Name" autocomplete="off" required value="<?php echo $_SESSION['username']; ?>"><br>
		<label>Product Name</label>
		<input type="text" name="product_name" placeholder="Product Name" autocomplete="off" required value= "<?php echo $result['Item_Name']; ?>"><br>
		<label>Order Quantity</label>
		<input type="text" name="order_qty" placeholder="Order Quantity" autocomplete="off" required value="<?php echo $result['Quantity']; ?>"><br>
		<label>OrderPrice</label>
		<input type="text" name="order_price" placeholder="Order Price" autocomplete="off" required value="<?php echo $result['Price']; ?>"><br>
		<label>Order Date</label>
		<input type="text" name="order_date" placeholder="Order Date" value="<?php echo $dt;?>" required><br>
		<label>Payment Type</label><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COD<input type="radio" name="payment_type" value="COD" required>
		<button type="submit" name="submit">Confirm Order</button>
	</form>
	</section>


<?php
include 'footer.php';
?>
</body>
</html>