<?php include("header.php"); ?>
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
	<td colspan="10" align="center" >Category</td>
</tr>
<tr class="th1">
	<td>Id</td>
	<td>Category</td>
	<td>Edit</td>
	<td>Delete</td>
</tr>
<?php
	include("con1.php");
	$query="select * from category";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo"</td><td>";
		echo $row["category"];
		echo"</td><td>";
		echo"<a href='categoryedit.php?id=".$row[0]."'>Edit</a>";
		echo"</td><td>";
		echo"<a href='categorydelete.php?id=".$row[0]."'>Delete</a>";
		echo"</td></tr>";
	}
?>
<tr>
	<td colspan="10" align="center" class="hed">
	<a href="category.php">Category Insert</a></td>
</tr>
</table>
<?php include("footer.php"); ?>