
<?php

session_start();

include('dbcon.php');

if (isset($_POST['submit'])) {	
	$user=$_POST['user'];
	$password=$_POST['password'];
	$sql="select * from admin where user='$user' and password='$password'";
	$query=mysqli_query($con,$sql);

	$row=mysqli_num_rows($query);
		if($row==1){
			echo "login succsessfull";
			$_SESSION['user']=$user;
			header('location:index.php');
		}else{
			?>
				<script>
					alert("Login Failed");
				</script>
				<?php
				header('location:a_login.php');
		}
}



?>
