
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/update.css" >
</head>
<body>
<?php 
include('header.php');

?>


<?php 
include('dbcon.php');
if(isset($_POST['add'])){
	$cate_id=$_POST['cate_id'];
	$cate=$_POST['cate_name'];
	$insert="insert into category(cate_id,cate_name) values('$cate_id','$cate')";
	$insert_query=mysqli_query($con,$insert);
	if(!$insert_query){
		?>
		<script>
			alert('Record Not Inserted');
		</script>
		<?php
	}
	else{
		header("location:category.php");
	}
}

?>

<br><br><br>
	<form method="POST" class="center">
		<h2>
		<tr>
			<th>Add Category</label></th>
		</tr>
		<tr>
		<td><input type="text" name="cate_id" placeholder="Cate_Id" autocomplete="off" required></td>
		<td><input type="text" name="cate_name" placeholder="Add Category" autocomplete="off" required></td>
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