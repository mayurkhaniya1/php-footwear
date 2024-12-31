<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_POST['id'];
$name=$_POST["name"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$total=$_POST["total"];
$query="update purchase set name='$name',quantity='$quantity', price='$price', total='$total'where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Updated");
window.location="purchasemaster.php";
</script>
<?php
}
else
{
	header("location:purchasemaster.php");
}
?>
