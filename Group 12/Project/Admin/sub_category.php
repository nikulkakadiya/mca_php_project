<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>
<body>
	
<?php include('header.php'); ?>

<br>

<a href="add_sub_cate.php" class="btn">ADD Sub Category</a>
	<h1>Sub_Category table</h1>

	<table>
		<thead>
		<tr id="header"> 
			<th>Sub_Category Id</th>
			<th>Category Id</th>
			<th>Sub_Category Name</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>


	<?php
	include('dbcon.php');
	$selectquery="select * from sub_category";
	$squery=mysqli_query($con,$selectquery);
//	$result=mysqli_fetch_assoc($squery);
	while($result=mysqli_fetch_assoc($squery)){

?>
		<tr>
			<td><?php echo $result['sub_cate_id']; ?></td>
			<td><?php echo $result['cate_id']; ?></td>
			<td><?php echo $result['sub_cate_name']; ?></td>
			<td><a href="update_sub_cate.php?sub_cate_id=<?php echo $result['sub_cate_id']; ?>"><img src="img/Edit .png"></a></td>
			<td><a href="sub_cate_delete.php?sub_cate_id=<?php echo $result['sub_cate_id']; ?>"><img src="img/Delete.png"/></a></td>
		</tr>
	<?php
	}


?>
	
		</tbody>
	</table>

</body>
</html>