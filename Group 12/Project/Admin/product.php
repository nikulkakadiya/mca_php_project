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


<a href="add_product.php" class="btn">ADD Product</a>


	<h1>Product table</h1>

	<table>
		<thead>
		<tr id="header"> 
			<th>Product Id</th>
			<th>Category Id</th>
			<th>Sub_Category Id</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Product Size</th>
			<th>Product Image</th>
			<th>Product Color</th>
			<th>Product Description</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>


	<?php
	include('dbcon.php');
	$selectquery="select * from product";
	$squery=mysqli_query($con,$selectquery);
//	$result=mysqli_fetch_assoc($squery);
	while($result=mysqli_fetch_assoc($squery)){

?>
		<tr>
			<td><?php echo $result['product_id']; ?></td>
			<td><?php echo $result['cate_id']; ?></td>
			<td><?php echo $result['sub_cate_id']; ?></td>
			<td><?php echo $result['product_name']; ?></td>
			<td><?php echo $result['product_price']; ?></td>
			<td><?php echo $result['product_size']; ?></td>
			<td><img src="img/<?php echo $result['product_image']; ?>" class="img"></td>
			<td><?php echo $result['product_color']; ?></td>
			<td><?php echo $result['product_description']; ?></td>
			<td><a href="update_product.php?product_id=<?php echo $result['product_id']; ?>"><img src="img/Edit .png"></a></td>
			<td><a href="product_delete.php?product_id=<?php echo $result['product_id']; ?>"><img src="img/Delete.png"/></a></td>
		</tr>
	<?php
	}


?>
	
		</tbody>
	</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>

</body>

</html>