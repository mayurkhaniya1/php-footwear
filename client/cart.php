<?php include("session.php");?>
<?php 
	 include("header.php");?>
<div class="collection_text">Order Details</div>
    <div class="layout_padding contact_section">
    	<div class="container">
    
    	</div>
	<?php echo "<br>";  ?>	
<?php
$connect = mysqli_connect("localhost", "root", "", "footwear_db");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
if(isset($_GET["buy"]))
{
	if($_GET["buy"] == "buynow")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				$itemid=$values["item_id"];
				$price=$values["item_price"];
				$item_name=$values["item_name"];
				$item_quantity=$values["item_quantity"];
				$username=$_SESSION['user'];
				$total = ($values["item_quantity"] * $values["item_price"]);
echo mysqli_query($connect,"INSERT INTO `purchase` (`id`, `username`, `itemid`, `itemname`, `itemprice`, `itemquantity`, `total`) VALUES (NULL, '$username', '$itemid', '$item_name', '$price', '$item_quantity', '$total')");

				unset($_SESSION["shopping_cart"][$keys]);
				echo "<script>alert('Congratulations! your order is conformed....');</script>";
				echo "<script>window.location='vieworder.php'</script>";
			}
		}
	}
}
?>
			<h3 align="center">Order Details</h3>
				<table border="1" >
					<tr>
						<th width="30%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td align="center"><?php echo $values["item_name"]; ?></td>
						<td align="center"><?php echo $values["item_quantity"]; ?></td>
						<td align="center"> <?php echo $values["item_price"]; ?></td>
					   <td align="center"> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td align="center"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
						<td align="center"><a href="cart.php?buy=buynow&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Buy Now</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"> <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
				</table>
			<?php echo "<br>"; ?>
<?php include("footer.php");?>