
<?php

include('dbcon.php');

$id=$_GET['buyer_id'];
$deletequery="delete from buyer where buyer_id=$id";
$dquery=mysqli_query($con,$deletequery);

if($dquery){
	?>
	<script>
		alert('Deleted Successfully');
	</script>
	<?php
	header('location:buyer.php');
}else{
	?>
	<script>
		alert('No Deleted');
	</script>
	<?php
}

?>