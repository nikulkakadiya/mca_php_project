<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORGET PASSWORD?</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body background="img/4375-Enzi-Twitter-Background-V1.jpg">
<?php 
include('dbcon.php');

if(isset($_POST['change']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$query="select * from buyer where email='$email'"; 
$firequery=mysqli_query($con,$query);
$num=mysqli_fetch_array($firequery);
if($num>0)
{
	$md5password=md5($password);
	$extra="forgetpassword.php";
	$updatequery="update buyer set password='$md5password' where email='$email'";
	mysqli_query($con,$updatequery);
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	echo "<script>
				alert('Password Successfully changed');
				window.location.href='login.php';
				</script>";
	//header("location:login.php");
	//$_SESSION['errmsg']="Password Changed Successfully";
	exit();
}
else
{
	$extra="forgetpassword.php";
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	//header("location:forgetpassword.php");
	//$_SESSION['errmsg']="Invalid Email";
	exit();
}
}

?>



	<section>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<h2>FORGET PASSWORD</h2>

		<label>Email Address</label>
		<input type="text" name="email" placeholder="Email Address" autocomplete="off" required><br>

		<label>New Password</label>
		<input type="password" name="password" placeholder="Re-enter Password" autocomplete="off" required><br>
		<button type="submit" name="change">Submit</button>
	</form>
	</section>

</body>
</html>