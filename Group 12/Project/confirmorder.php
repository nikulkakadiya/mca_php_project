<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>


<?php
include 'header.php';
?>

<table>
  <thead>
    <tr> 
      <th>UserName</th>
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th>Product Price</th>
      <th>Order Date</th>
      <th>Payment Type</th>
    </tr>
  </thead>


<?php 
include 'dbcon.php';
$dt = date('d/m/Y');
if(isset($_SESSION['product']))
{
foreach ($_SESSION['product'] as $key => $value)
{
  echo "<tr>
      <td>$_SESSION[username]</td>
      <td>$value[Item_Name]</td>
      <td>$value[Quantity]</td>
      <td>$value[Price]</td>
      <td>$dt</td>
      <td>COD</td>
    </tr>";
}
}


?>

</table>
  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <h1>Thank You<br><br>
    Visit Again :)
  </h1>
<br>
<?php
include 'footer.php';
?>
</body>
</html>