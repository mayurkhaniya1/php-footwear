<?php include("header.php");?>
<?php
$id=$_GET['id'];
include("con1.php");
$query="select * from product where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form action="producteditcon.php"method="post">
<table class="tbl" border="1" cellpadding="5" cellspacing="5" align="center">
<tr>
<td colspan="2" align="center" class="hed">
Product Form
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
<td>Category</td>
<td>
<input name="category" type="text" id="category"
 value="<?php echo $row["category"]
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
<td>Image</td>
<td>
<input name="image" type="file" id="image"
 value="<?php echo $row["image"]
?>">
</td>
</tr>
<tr>
<td>Description</td>
<td>
<input name="description" type="text" id="description"
 value="<?php echo $row["description"]
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