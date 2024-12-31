<?php
include("session.php");
?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from purchase where id=".$id;
$result=mysqli_query($con,$query);
if($result==Null)
{?>
<script>
alert("Record Not Deleted");
window.location="purchasemaster.php";
</script>
<?php
}
else
{
header("location:purchasemaster.php");
}
?>
