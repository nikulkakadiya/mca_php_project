<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<!--google fonts link start-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!--google fonts link end-->
</head>
<body>
<!--
	   <form method="POST">
	   </form>  
	-->
	<div class="header">
	<div class="container">
	<nav>
		<div class="logo">FootWear</div>
		<ul>
		
			<li><a href="index.php">Home</a></li>
			<li>
				<a href="#">Categores</a>
				<ul>

<?php  

include('dbcon.php');

$query="select `cate_name` from `category` order by `cate_id` asc";

$firequery=mysqli_query($con,$query);

$num=mysqli_num_rows($firequery);

if($num>0){
	while($product=mysqli_fetch_array($firequery)){
		if($product['cate_name'] == 'man'){
		
?>


					<li>
						<a href="<?php echo $product['cate_name']; ?>.php"><?php echo $product['cate_name']; ?></a>
						<ul>
							<li><a href="m-sports.php">Sports</a></li>
							<li><a href="m-partywear.php">Partywear</a></li>
						</ul>
					</li>
				<?php } 
				else {?>
					<li>
						<a href="<?php echo $product['cate_name']; ?>.php"><?php echo $product['cate_name']; ?></a>
						<ul>
							<li><a href="w-sports.php">Sports</a></li>
							<li><a href="w-partywear.php">Partywear</a></li>
						</ul>
					</li>
				<?php } ?>
					

<?php
	}
}
?>

	
				</ul>
			</li>
			<li><a href="products.php">Products</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			<li>
<?php

$count=0;
if(isset($_SESSION['product']))
{
	$count=count($_SESSION['product']);
}

?>
				<a href="mycart.php">My Cart (<?php echo $count; ?>)</a></li>
			<?php
			//session_start();
			if(isset($_SESSION['username'])){
				?>
				<li><a href="logout.php">Logout</a></li>
			<?php 
		}
			else{ 
				?>
				<li><a href="login.php">Login</a></li>
			<?php 
		}
			?>
		</ul>
	</nav>
</div>
</div>

</body>
</html>