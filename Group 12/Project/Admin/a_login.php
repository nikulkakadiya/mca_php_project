<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/astyle.css">
</head>
<body background="img/4375-Enzi-Twitter-Background-V1.jpg">
	
	<section>
	<form action="check.php" method="POST">
		<h2>ADMIN LOGIN</h2>
		<label>User Name</label>
		<input type="text" name="user" placeholder="User Name" autocomplete="off" required><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password" autocomplete="off" required><br>
		
		<button type="submit" name="submit">Login</button>
	</form>
	</section>


</body>
</html>