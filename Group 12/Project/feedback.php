<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/feddback.css">
</head>
<body background="img/713312-amazing-cool-shoes-hd-wallpapers-1920x1200-for-ipad-pro.jpg">
<?php include('header.php'); ?>
<br><br><br><br><br><br><br>


<?php
include('dbcon.php');

if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$msg=mysqli_real_escape_string($con,$_POST['massage']);

	//$emailquery="select * from feedback";
	//$query=mysqli_query($con,$emailquery);
	//$emailcount=mysqli_num_rows($query);

	$insertquery="insert into feedback(name,email,massage) values('$name','$email','$msg')";
	$iquery=mysqli_query($con,$insertquery);
	if($iquery)
	{
		echo "<script>
			alert('Feedback Send Successfully... ');
			window.location.href='index.php';
			</script>";
	}
}
?>



<section>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<h2>Feedback</h2>
		<label>Name</label>
		<input type="text" name="name" placeholder="Name" autocomplete="off" required><br>
		<label>Email-Id</label>
		<input type="email" name="email" placeholder="Email-Id" autocomplete="off" required><br>
		<label>Message</label>
		&nbsp;&nbsp;&nbsp;<textarea name="massage" placeholder="Message"></textarea><br>
		&nbsp;&nbsp;&nbsp;<button type="submit" name="submit">Submit</button>
	</form>
	</section>
<?php include('footer.php'); ?>
</body>
</html>