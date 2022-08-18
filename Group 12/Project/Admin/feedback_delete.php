<?php

include('dbcon.php');

$id=$_GET['feedback_id'];
$deletequery="delete from feedback where feedback_id=$id";
$dquery=mysqli_query($con,$deletequery);

if($dquery){
	?>
	<script>
		alert('Deleted Successfully');
	</script>
	<?php
	header('location:feedback.php');
}else{
	?>
	<script>
		alert('No Deleted');
	</script>
	<?php
}

?>