<?php
session_start();
if(isset($_SESSION['username']))
{
				echo "<script>
				window.location.href='home.php';
				</script>";
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body background="img/4375-Enzi-Twitter-Background-V1.jpg">

<?php
include('dbcon.php');

if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$confirmpassword=mysqli_real_escape_string($con,$_POST['confirmpassword']);

	$emailquery="select * from buyer where email='$email'";
	$query=mysqli_query($con,$emailquery);

	$emailcount=mysqli_num_rows($query);
	$_SESSION['username'] =$username;

	if($emailcount>0){
		?>
			<script>
			alert("Email Already Exist");
			</script>
			<?php
	}else{
		if($password===$confirmpassword){
			$md5password = md5($password);
			$insertquery="insert into buyer(username,email,address,password) values('$username','$email','$address','$md5password')";
			$iquery=mysqli_query($con,$insertquery);
			if($iquery){
				?>
				<!--<script>
					alert("inserted successfull");
				</script>-->
				<?php
				header("location:index.php");
			}else{
				?>
				<script>
					alert("no inserted");
				</script>
				<?php
			}
		}else{
			?>
				<script>
					alert("Password not matching");
 				</script>
				<?php
		}
	}

}
?>
	<section>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<h2>SignUp</h2>
		<label>User Name</label>
		<input type="text" name="username" placeholder="User Name" autocomplete="off" required><br>
		<label>Email-Id</label>
		<input type="email" name="email" placeholder="Email-Id" autocomplete="off" required><br>
		<label>Address</label>
		<input type="text" name="address" placeholder="Address" autocomplete="off" required><br>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password" autocomplete="off" required><br>
		<label>Confirm Password</label>
		<input type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" required><br>
		<button type="submit" name="submit">SignUp</button>
		<h5 align="right">Have an Account?&nbsp<a href="login.php">LOG IN</a></h5>
	</form>
	</section>

</body>
</html>