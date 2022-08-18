<?php
session_start();

if(!isset($_SESSION['username']))
{
				echo "<script>
				alert('Please Login');
				window.location.href='login.php';
				</script>";
	
}
//print_r($_POST);exit;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['cart_btn']))
	{
		if(isset($_SESSION['product']))
		{
			//$myitems=array_column($_SESSION['product'],'Item_Name');
			if(in_array($_POST['Item_Name']/*,$myitems*/))
			{
				echo "<script>
				window.location.href='mycart.php';
				</script>";
			}
			else
			{
			$count=count($_SESSION['product']);
			$_SESSION['product'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'color'=>$_POST['product_color'],'size'=>$_POST['product_size'],'product_description'=>$_POST['product_description'],'Quantity'=>1);
			
			echo "<script>
				window.location.href='mycart.php';
				</script>";
			}
		}
		else
		{
		$_SESSION['product'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'color'=>$_POST['product_color'],'size'=>$_POST['product_size'],'product_description'=>$_POST['product_description'],'Quantity'=>1);
		echo "<script>
				window.location.href='mycart.php';
				</script>";
		}
	}
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['product'] as $key => $value)
		{
			if($value['Item_Name']==$_POST['Item_Name'])
			{
			unset($_SESSION['product'][$key]);
			$_SESSION['product']=array_values($_SESSION['product']);
			echo "<script>
					<!--alert('Item Removed');-->
					window.location.href='mycart.php';
				  </script>";
			}
		}
	}
}

//if(isset($_POST['buy_btn'])){
	
//	echo "<script>
//				window.location.href='mycart.php';
//				</script>";
//}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['buy_btn']))
	{
		if(isset($_SESSION['product']))
		{
			//$myitems=array_column($_SESSION['product'],'Item_Name');
			if(in_array($_POST['Item_Name']/*,$myitems*/))
			{
				echo "<script>
				window.location.href='mycart.php';
				</script>";
			}
			else
			{
			$count=count($_SESSION['product']);
			$_SESSION['product'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'color'=>$_POST['product_color'],'size'=>$_POST['product_size'],'product_description'=>$_POST['product_description'],'Quantity'=>1);
			
			echo "<script>
				window.location.href='mycart.php';
				</script>";
			}
		}
		else
		{
		$_SESSION['product'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'color'=>$_POST['product_color'],'size'=>$_POST['product_size'],'product_description'=>$_POST['product_description'],'Quantity'=>1);
		echo "<script>
				window.location.href='mycart.php';
				</script>";
		}
	}
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['product'] as $key => $value)
		{
			if($value['Item_Name']==$_POST['Item_Name'])
			{
			unset($_SESSION['product'][$key]);
			$_SESSION['product']=array_values($_SESSION['product']);
			echo "<script>
					<!--alert('Item Removed');-->
					window.location.href='mycart.php';
				  </script>";
			}
		}
	}
}

?>
