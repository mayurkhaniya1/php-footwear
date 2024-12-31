<?php include("header.php"); ?>
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
	<td colspan="10" align="center" >Feedback</td>
</tr>
<tr class="th1">
	<td>Id</td>
	<td>Name</td>
	<td>Mobile</td>
	<td>Email</td>
	<td>Feedback</td>
	
	<td>Delete</td>
</tr>
<?php
	include("con1.php");
	$query="select * from feedback";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo"</td><td>";
		echo $row["name"];
		echo"</td><td>";
		echo $row["mobile"];
		echo"</td><td>";
		echo $row["email"];
		echo"</td><td>";
		echo $row["feedback"];
		echo"</td><td>";
		echo"<a href='feedbackdelete.php?id=".$row[0]."'>Delete</a>";
		echo"</td></tr>";
	}
?>
<tr>
	<td colspan="10" align="center" class="hed">
	<a href="feedback.php">Feedback Insert</a></td>
</tr>
</table>
<?php include("footer.php"); ?>