<?php

include('dbcon.php');

$id=$_GET['product_id'];
$deletequery="delete from product where product_id=$id";
$dquery=mysqli_query($con,$deletequery);

if($dquery){
	?>
	<script>
		alert('Deleted Successfully');
	</script>
	<?php
	header('location:product.php');
}else{
	?>
	<script>
		alert('No Deleted');
	</script>
	<?php
}

?>