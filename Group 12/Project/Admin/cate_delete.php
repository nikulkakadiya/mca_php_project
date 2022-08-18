
<?php

include('dbcon.php');

$id=$_GET['cate_id'];
$deletequery="delete from category where cate_id=$id";
$dquery=mysqli_query($con,$deletequery);

if($dquery){
	?>
	<script>
		alert('Deleted Successfully');
	</script>
	<?php
	header('location:category.php');
}else{
	?>
	<script>
		alert('No Deleted');
	</script>
	<?php
}

?>