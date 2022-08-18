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

$id=$_GET['cate_id'];
$selectquery="select * from category where cate_id=$id";
$query=mysqli_query($con,$selectquery);
$result=mysqli_fetch_assoc($query);
if(isset($_POST['submit'])){

	$id=$_GET['cate_id'];

	$cate=mysqli_real_escape_string($con,$_POST['cate_name']);

	$updatequery="update category set cate_name='$cate' where cate_id='$id' ";
	$query=mysqli_query($con,$updatequery);
	if($query){
		?>
		<?php
		header("location:category.php");
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
		<h2>Update Category</h2>
		<label>Update Category</label>
		<input type="text" name="cate_name" placeholder="Update Category" autocomplete="off" value="<?php echo $result['cate_name']; ?>" required><br>
		<button type="submit" name="submit">Submit</button>
	</form>
	</section>

<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>


</body>
</html>