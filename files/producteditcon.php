<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_POST['id'];
$name=$_POST["name"];
$category=$_POST["category"];
$price=$_POST["price"];
$image=$_POST["image"];
$description=$_POST["description"];
$query="update product set name='$name', category='$category',price='$price',image='$image',description='$description' where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Updated");
window.location="productmaster.php";
</script>
<?php
}
else
{
	header("location:productmaster.php");
}
?>
