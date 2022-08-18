
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>


<?php include('header.php'); ?>
<br><br>
<a href="add_cate.php" class="btn">ADD Category</a>


	<h1>Category table</h1>

	<table>
		<thead>
		<tr id="header"> 
			<th>Category Id</th>
			<th>Category Name</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>


	<?php
	include('dbcon.php');
	$selectquery="select * from category";
	$squery=mysqli_query($con,$selectquery);
//	$result=mysqli_fetch_assoc($squery);
	while($result=mysqli_fetch_assoc($squery)){

?>
		<tr>
			<td><?php echo $result['cate_id']; ?></td>
			<td><?php echo $result['cate_name']; ?></td>
			<td><a href="update_cate.php?cate_id=<?php echo $result['cate_id']; ?>"><img src="img/Edit .png"></a></td>
			<td><a href="cate_delete.php?cate_id=<?php echo $result['cate_id']; ?>"><img src="img/Delete.png"/></a></td>
		</tr>
	<?php
	}


?>
	
		</tbody>
	</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>

</body>

</html>