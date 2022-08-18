<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:a_login.php');
}
?>
<?php include('header.php'); 
?>
<?php include('sidemenu.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body background="img/3.jpg">
	<br><br>
<h2 align="center" style="color: red">Welcome To Admin Panel <?php echo  $_SESSION['user']?> </h2>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<font color="white">&COPY &nbsp:&nbsp COPYRIGHT BY FOOTWEAR 2021 &nbsp&nbsp</font><font color="white" size="4" style="text-align: left;"> JAY , &nbsp DHAVAL , &nbsp PIYUSH</font>
</footer>

</body>
</html>