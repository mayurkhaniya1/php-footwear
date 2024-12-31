<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from product where id=".$id;
$result=mysqli_query($con,$query);
if($result==Null)
{?>
<script>
alert("Record Not Deleted");
window.location="productmaster.php";
</script>
<?php
}
else
{
header("location:productmaster.php");
}
?>
