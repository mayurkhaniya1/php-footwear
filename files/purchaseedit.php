<?php include("header.php");?>
<?php
$id=$_GET['id'];
include("con1.php");
$query="select * from purchase where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form action="Purchaseeditcon.php"method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
<td colspan="2" align="center" class="hed">
Purchase Form
</td>
</tr>
<input name="id" type="hidden" value="<?php echo $_GET['id']?>">
<tr>
<td>Name</td>
<td>
<input name="name" type="text" id="name"
 value="<?php echo $row["name"]
?>">
</td>
</tr>
<tr>
<td>Quantity</td>
<td>
<input name="quantity" type="text" id="quantity"
 value="<?php echo $row["quantity"]
?>">
</td>
</tr>
<tr>
<td>Price</td>
<td>
<input name="price" type="text" id="price"
 value="<?php echo $row["price"]
?>">
</td>
</tr>
<tr>
<td>Total</td>
<td>
<input name="total" type="text" id="total"
 value="<?php echo $row["total"]
?>">
</td>
</tr>
<tr>
<td colspan="2" align="center" class="hed">
<input type="submit" name="submit" 
value="submit" class="btn">
</td>
</tr>
</table>
</form>
<?php
}
?>
<?php include("footer.php");?>