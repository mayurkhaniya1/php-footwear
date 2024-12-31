<?php include("header.php"); ?>
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
	<td colspan="5" align="center" >Login</td>
</tr>
<tr class="th1">
	<td>Id</td>
	<td>Username</td>
	<td>Password</td>
	<td>Edit</td>
	<td>Delete</td>
</tr>
<?php
	include("con1.php");
	$query="select * from login";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo"</td><td>";
		echo $row["username"];
		echo"</td><td>";
		echo $row["password"];
		echo"</td><td>";
		echo"<a href='loginedit.php?id=".$row[0]."'>Edit</a>";
		echo"</td><td>";
		echo"<a href='logindelete.php?id=".$row[0]."'>Delete</a>";
		echo"</td></tr>";
	}
?>
<tr>
	<td colspan="10" align="center" class="hed">
	<a href="login.php">Login Insert</a></td>
</tr>
</table>
<?php include("footer.php"); ?>