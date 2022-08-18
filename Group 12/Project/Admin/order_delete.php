<?php

include('dbcon.php');

$id=$_GET['order_id'];
$deletequery="delete from `order` where order_id=$id";
$dquery=mysqli_query($con,$deletequery);

if($dquery){
	?>
	<script>
		alert('Deleted Successfully');
	</script>
	<?php
	header('location:order.php');
}else{
	?>
	<script>
		alert('No Deleted');
	</script>
	<?php
}

?>