<?php

include('dbcon.php');

$id=$_GET['sub_cate_id'];
$deletequery="delete from sub_category where sub_cate_id=$id";
$dquery=mysqli_query($con,$deletequery);

if($dquery){
	?>
	<script>
		alert('Deleted Successfully');
	</script>
	<?php
	header('location:sub_category.php');
}else{
	?>
	<script>
		alert('No Deleted');
	</script>
	<?php
}

?>