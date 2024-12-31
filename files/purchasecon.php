<?php
include("session.php");
?>
<?php
include("con1.php");
$name=$_POST["name"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$total=$_POST["total"];
$query="insert into purchase(name,quantity,price,total)values('$name','$quantity','$price','$total')";
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Inserted");
window.location="purchasemaster.php";
</script>
<?php
}
else
{
	header("location:purchasemaster.php");
}
?>
