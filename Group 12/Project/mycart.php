<?php 
//if(!isset($_SESSION['username']))
//{
//				echo "<script>
//				alert('Please Login');
//				window.location.href='login.php';
//				</script>";
	
//}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/mycart.css">
</head>
<body>
<?php include('header.php'); ?>
<br><br>

	<div class="cntr">
		<h1>MY CART</h1>
	</div>

<div class="container">          
  <table class="table">
    <thead>
      <tr>
        <th>Serial No.</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Size</th>
        <th>Product Color</th>
        <th>Product Description</th>
        <th>Product Quantity</th>
        <th>Remove Product</th>
      </tr>
    </thead>
    <tbody>
<?php 
$total=0;
if(isset($_SESSION['product']))
{
foreach ($_SESSION['product'] as $key => $value)
{
	$sr=$key+1;
	$total=$total+$value['Price'];
	echo "<tr>
			<td>$sr</td>
			<td>$value[Item_Name]</td>
			<td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
			<td>$value[size]</td>
			<td>$value[color]</td>
			<td>$value[product_description]</td>
			<td><input class='iquantity' type='number' value='$value[Quantity]' min='1' max='1' /></td>
			<td>
				<form action='manage_cart.php' method='POST'>
					<button name='Remove_Item'>REMOVE</button>
					<input type='hidden' name='Item_Name' value='$value[Item_Name]'>
				</form>
			</td>
		</tr>";
}
}
?>
    </tbody>
  </table>
</div>

<?php 

if(isset($_POST['submit'])){
	echo "<script>
				window.location.href='buynow.php';
				</script>";
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="lg">
	<br>
	
	<h3>&nbsp;&nbsp;&nbsp;&nbsp;Total :</h3>
	
	<h4 align="right" id="gtotal"><?php echo $total; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
	<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="COD" required>&nbsp;COD
	<br><form method="POST">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="submit">Place Order</button></form>
</div>


<!--
<script>
	var gt=0;
		var iprice=document.getElementsByClassName('iprice');
	var iquantity=document.getElementsByClassName('iquantity');
	var itotal=document.getElementsByClassName('itotal');
	var gtotal=document.getElementsById('gtotal');

	function subTotal()
	{
		gt=0;
		for(i=0;i<iprice.length;i++)
		{
			itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

			gt=gt+(iprice[i].value)*(iquantity[i].value);
		}
		gtotal.innerText=gt;
	}

	subTotal();
</script>


-->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php'); ?>
</body>
</html>