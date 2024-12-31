<?php include("header.php"); ?>
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
	<td colspan="10" align="center" >Product</td>
</tr>
<tr class="th1">
	<td>Id</td>
	<td>Name</td>
	<td>Category</td>
	<td>Price</td>
	<td>Image</td>
	<td>Description</td>
	<td>Edit</td>
	<td>Delete</td>
</tr>
<?php
	include("con1.php");
	$query="select * from product";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo"</td><td>";
		echo $row["name"];
		echo"</td><td>";
		echo $row["category"];
		echo"</td><td>";
		echo $row["price"];
		echo"</td><td>";
		echo "<img src='".$row[4]."' height=50 width=50>";
		echo"</td><td>";
		echo $row["description"];
		echo"</td><td>";
		echo"<a href='productedit.php?id=".$row[0]."'>Edit</a>";
		echo"</td><td>";
		echo"<a href='productdelete.php?id=".$row[0]."'>Delete</a>";
		echo"</td></tr>";
	}
?>
<tr>
	<td colspan="10" align="center" class="hed">
	<a href="product.php">Product Insert</a></td>
</tr>
</table>
<?php include("footer.php"); ?>