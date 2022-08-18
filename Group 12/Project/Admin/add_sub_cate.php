
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

	$sub_cate_id=$_POST['sub_cate_id'];
	$cate_id=$_POST['cate_id'];
	$sub_cate=$_POST['sub_cate_name'];
	$insert="insert into sub_category(sub_cate_id,cate_id,sub_cate_name) values('$sub_cate_id','$cate_id','$sub_cate')";
	$insert_query=mysqli_query($con,$insert);
	if(!$insert_query){
		die("Query Failed" .mysqli_error($con));
	}
	else{
	header("location:sub_category.php");
	}
}

?>


	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="center">
		<h2>
		<tr>
			<th><label>Add Sub_Category</label></th>
		</tr>
		<tr>
		<td><input type="text" name="sub_cate_id" placeholder="Sub_Cate_ID" autocomplete="off" required></td>
		<td><input type="text" name="cate_id" placeholder="Cate_Id" autocomplete="off" required></td>
		<td><input type="text" name="sub_cate_name" placeholder="Add Sub_Category Name" autocomplete="off" required></td>

		</tr>
		<button type="submit" name="add">Submit</button></h2>
	</form>


<!-- add category end -->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>

</body>
</html>