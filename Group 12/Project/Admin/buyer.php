
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
<br>
<br>
	<h1>Buyer table</h1>

	<table>
		<thead>
		<tr id="header"> 
			<th>Id</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Address</th>
			<th>Password</th>
			<th>Opration</th>
		</tr>
		</thead>
		<tbody>


	<?php
	include('dbcon.php');
	$selectquery="select * from buyer";
	$squery=mysqli_query($con,$selectquery);
//	$result=mysqli_fetch_assoc($squery);
	while($result=mysqli_fetch_assoc($squery)){

?>
		<tr>
			<td><?php echo $result['buyer_id']; ?></td>
			<td><?php echo $result['username']; ?></td>
			<td><?php echo $result['email']; ?></td>
			<td><?php echo $result['address']; ?></td>
			<td><?php echo $result['password']; ?></td>
			<td><a href="buyer_delete.php?buyer_id=<?php echo $result['buyer_id']; ?>"><img src="img/Delete.png"/></a></td>
		</tr>
	<?php
	}


?>
	
		</tbody>
	</table>

</body>
</html>