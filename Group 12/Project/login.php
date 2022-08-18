<?php  
session_start();
//if(!isset($_SESSION['username'])){
//	header('location:home.php');
//}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body background="img/4375-Enzi-Twitter-Background-V1.jpg">
<?php 

include('dbcon.php');
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$md5password=md5($password); 
    $email_search="select * from buyer where email='$email' and password='$md5password'";
	$query=mysqli_query($con,$email_search);

	$email_count=mysqli_num_rows($query);

	if($email_count==1){
			$email_pass=mysqli_fetch_assoc($query);
			$username =  $email_pass['username']; 
			$email= $email_pass['email'];
			$_SESSION['username'] =$username;

			header("location:index.php");
			exit;

		}else{
				?>
				<script>
					alert("Invalide Email or Password");
				</script>
				<?php
			}	
}
?>
	<section>
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<h2>LOGIN</h2>
		<label>Email-Id</label>
		<input type="email" name="email" placeholder="Email-Id" autocomplete="off" required><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password" autocomplete="off" required><br>
		
		<a href="forgetpassword.php"><h5>Forget Password?</h5></a>
		<button type="submit" name="submit">Login</button>
		<h6 align="right">You Don't Have an Account?&nbsp<a href="signup.php">Sign Up</a></h6>
	</form>
	</section>
</body>
</html>