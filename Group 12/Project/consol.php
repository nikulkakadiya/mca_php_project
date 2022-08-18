<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/consol.css">
</head>
<body>

	<div class="header">
		<div class="row">
			<div class="col-2">
				<h2><font color="red">Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></font></h2>
				<h1>Give Your Workout<br> A New Style!</h1>
				<p>Success isn't always about greatness. It's about consistency. Consistent<br> hard work gains success. Greatness will come.</p><br>
				<a href="products.php" class="btn">Explore Now <!--butn arrow code -->&#8594;<!--butn arrow code end--></a>
			 </div>
			<div class="col-2">
				<img src="img/image1.png">
			</div>
		</div>
</div>
</body>
</html>