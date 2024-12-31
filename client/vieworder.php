<?php include("session.php");
 include("header.php"); ?>
 <div class="collection_text">View Order</div>
    <div class="layout_padding contact_section">
    	<div class="container">
    
    	</div>
	<?php echo "<br>";  ?>
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
	<td colspan="10" align="center" ><b>View Order</b></td>
</tr>
<tr class="th1">
	<td>Id</td>
	<td>Username</td>
	<td>Itemid</td>
	<td>Itemname</td>
	<td>Itemprice</td>
	<td>Itemquntity</td>
	<td>Total</td>
</tr>
<?php
	include("con1.php");
	$username=$_SESSION["user"];
	$query="select * from purchase where username='$username'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo"</td><td>";
		echo $row["username"];
		echo"</td><td>";
		echo $row["itemid"];
		echo"</td><td>";
		echo $row["itemname"];
		echo"</td><td>";
		echo $row["itemprice"];
		echo"</td><td>";
		echo $row["itemquantity"];
		echo"</td><td>";
		echo $row["total"];
		echo"</td></tr>";
	}
?>

</table>
<?php echo "<br>";  ?>
<?php include("footer.php"); ?>

