<?php include("header.php"); ?>
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
	<td colspan="10" align="center" >Purchase</td>
</tr>
<tr class="th1">
	<td>Id</td>
	<td>Name</td>
	<td>Quantity</td>
	<td>Price</td>
	<td>Total</td>
	<td>Edit</td>
	<td>Delete</td>
</tr>
<?php
	include("con1.php");
	$query="select * from purchase";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo"</td><td>";
		echo $row["name"];
		echo"</td><td>";
		echo $row["quantity"];
		echo"</td><td>";
		echo $row["price"];
		echo"</td><td>";
		echo $row["total"];
		echo"</td><td>";
		echo"<a href='purchaseedit.php?id=".$row[0]."'>Edit</a>";
		echo"</td><td>";
		echo"<a href='purchasedelete.php?id=".$row[0]."'>Delete</a>";
		echo"</td></tr>";
	}
?>
<tr>
	<td colspan="10" align="center" class="hed">
	<a href="purchase.php">Purchase Insert</a></td>
</tr>
</table>
<?php include("footer.php"); ?>