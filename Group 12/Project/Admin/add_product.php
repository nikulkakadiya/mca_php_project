
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/update.css">
</head>
<body>
<?php include('header.php'); ?>
<!-- add category -->
<?php 
include('dbcon.php');
if(isset($_POST['add'])){

	$product=$_POST['product_id'];
	$cate_id=$_POST['cate_id'];
	$sub_cate_id=$_POST['sub_cate_id'];
	$prdct_name=$_POST['product_name'];
	$prdct_price=$_POST['product_price'];
	$prdct_size=$_POST['product_size'];
	
	$img=$_FILES['product_image']['name'];

	$newpath="./img/".$img;

	move_uploaded_file($_FILES['product_image']['tmp_name'],$newpath);

	//$prdct_image=$_POST['product_image'];
	$prdct_color=$_POST['product_color'];
	$prdct_description=$_POST['product_description'];

	$insert="insert into product(product_id,cate_id,sub_cate_id,product_name,product_price,product_size,product_image,product_color,product_description) values('$product','$cate_id','$sub_cate_id','$prdct_name','$prdct_price','$prdct_size','$img','$prdct_color','$prdct_description')";
	$insert_query=mysqli_query($con,$insert);
	if(!$insert_query){
		die("Query Failed" .mysqli_error($con));
	}
	else{
		header("location:product.php");
	}
}

?>


	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="center" enctype="multipart/form-data">
		<h2>
		<tr>
			<th><label>Add Product</label></th>
		</tr>
		<tr>
		<td><input type="text" name="product_id" placeholder="Product Id" autocomplete="off" required></td>
		<td><input type="text" name="cate_id" placeholder="Cate_Id" autocomplete="off" required></td>
		<td><input type="text" name="sub_cate_id" placeholder="Sub_Cate_ID" autocomplete="off" required></td>
		<td><input type="text" name="product_name" placeholder="Product Name" autocomplete="off" required></td>
		<td><input type="text" name="product_price" placeholder="Product Price" autocomplete="off" required></td>
		<td><input type="text" name="product_size" placeholder="Product Size" autocomplete="off" required></td>
		<td><input type="file" name="product_image" placeholder="Product Image" autocomplete="off" required></td>
		<td><input type="text" name="product_color" placeholder="Product Color" autocomplete="off" required></td>
		<td><input type="text" name="product_description" placeholder="Product Description" autocomplete="off" required></td>
		</tr>
		<button type="submit" name="add">Submit</button></h2>
	</form>


<!-- add category end -->

<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>

</body>
</html>