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

$id=$_GET['sub_cate_id'];
$selectquery="select * from sub_category where sub_cate_id=$id";
$query=mysqli_query($con,$selectquery);
$result=mysqli_fetch_assoc($query);
if(isset($_POST['submit'])){

	$id=$_GET['sub_cate_id'];

	$sub_cate=mysqli_real_escape_string($con,$_POST['sub_cate_name']);

	$updatequery="update sub_category set sub_cate_name='$sub_cate' where sub_cate_id='$id' ";
	$query=mysqli_query($con,$updatequery);
	if($query){
		?>
		<?php
		header("location:sub_category.php");
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
		<h2>Update Sub-Category</h2>
		<label>Update Sub-Category</label>
		<input type="text" name="sub_cate_name" placeholder="Update Category" autocomplete="off" value="<?php echo $result['sub_cate_name']; ?>" required><br>
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