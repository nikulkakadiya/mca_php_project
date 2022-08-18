<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>


<?php include('header.php'); ?>

<br><br><br>

	<h1>Order table</h1>

	<table>
		<thead>
		<tr id="header"> 
			<th>Order Id</th>
			<th>Buyer Name</th>
			<th>Product Name</th>
			<th>Order Quantity</th>
			<th>Order Price</th>
			<th>Order Date</th>
			<th>Payment Type</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>


	<?php
	include('dbcon.php');
	$dt = date('d/m/Y');
	$selectquery="select * from `order`";
	$squery=mysqli_query($con,$selectquery);
	while($result=mysqli_fetch_assoc($squery)){

?>
		<tr>
			<td><?php echo $result['order_id']; ?></td>
			<td><?php echo $result['buyer_name']; ?></td>
			<td><?php echo $result['product_name']; ?></td>
			<td><?php echo $result['order_qty']; ?></td>
			<td><?php echo $result['order_price']; ?></td>
			<td><?php echo $dt; ?></td>
			<td><?php echo $result['payment_type']; ?></td>
			
			<td><a href="order_delete.php?order_id=<?php echo $result['order_id']; ?>"><img src="img/Delete.png"/></a></td>
		</tr>
	<?php
	}


?>
	
		</tbody>
	</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>

</body>

</html>